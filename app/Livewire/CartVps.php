<?php

namespace App\Livewire;

use App\Mail\OrderMail;
use App\Models\VpsSubscription;
use Illuminate\Support\Facades\Log;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class CartVps extends Component
{
    use WithFileUploads;
    public $plan;
    public $selectedBox;
    public $discount = 00.0;
    public $promoCode;
    public $num_months = 1;
    public $currentStep = 1;
    public $name, $email, $PhoneNumber, $PhoneTransaction, $imageUpload;
    public $subs_id;

    protected $rules = [
        'name' => 'required|string|max:50',
        'email' => 'required|email|max:50',
        'PhoneNumber' => 'required|numeric|digits_between:10,15',
        'PhoneTransaction' => 'required|numeric|digits_between:10,15',
    ];

    public function nextStep()
    {
        if ($this->currentStep == 2) {
            $this->validate();
        }
        if ($this->currentStep < 3) {
            $this->currentStep++;
        }
    }

    public function prevStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function mount($plan)
    {
        $this->plan = $plan;

        $this->selectedBox = $this->plan->price_1_month;
    }

    public function selectBox($boxNumber)
    {
        if ($boxNumber == 2){
            $this->selectedBox = $this->plan->price_1_year * 12;
            $this->num_months = 12;
        } else if($boxNumber == 3) {
            $this->num_months = 24;
            $this->selectedBox = $this->plan->price_2_years * 24;
        } else if($boxNumber == 4) {
            $this->num_months = 48;
            $this->selectedBox = $this->plan->price_3_years * 48;
        } else {
            $this->num_months = 1;
            $this->selectedBox = $this->plan->price_1_month;
        }

    }

    public function applyPromoCode()
    {
        $this->validate([
            'promoCode' => 'required',
        ]);
        $promo = Coupon::where('name', $this->promoCode)->first();

        if ($promo) {
            $this->discount = $promo->price_discount;
            session()->flash('message', 'Promo code applied successfully!');
        } else {
            session()->flash('error', 'Invalid promo code!');
        }
    }

    public function applyForm()
    {
        try {
            $validatedData = $this->validate();

            if ($this->imageUpload) {
                $validatedData['imageUpload'] = time() . '-' . $this->imageUpload->getClientOriginalName();
                $this->imageUpload->storeAs('public/images/transaction', $validatedData['imageUpload']);
            }

            if($this->subs_id){
                $type = 're_new';
                $subscription = VpsSubscription::findOrFail($this->subs_id);
                $user = $subscription->user;
                $password = $subscription->password;
                $ip = $subscription->ip;
            } else {
                $type = 'new';
                $user = NULL;
                $password = NULL;
                $ip = NULL;
            }

            $order =  Order::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['PhoneNumber'],
                'transaction_number' => $validatedData['PhoneTransaction'],
                'image_path' => $validatedData['imageUpload'],
                'customer_id' => auth()->user()->customer->id,
                'product' => 'vps: ' . $this->plan->name,
                'vps_plan_id' => $this->plan->id,
                'num_months' => $this->num_months,
                'disCount' => $this->discount,
                'type' => $type,
                'total' => $this->selectedBox - $this->discount + (($this->selectedBox- $this->discount) * .14),
            ]);

            VpsSubscription::create([
                'order_id' => $order->id,
                'start_date' => now(),
                'end_date' => Carbon::now()->addMonths($this->num_months),
                'status' => 'pending',
                'user' => $user,
                'password' => $password,
                'ip' => $ip,
            ]);

            $order['subTotal'] = $this->selectedBox;
            $user = User::with('customer.orders')->where('id',auth()->user()->id)->first();
            try {
                Mail::to(auth()->user()->email)->send(new OrderMail($user, $order));
            } catch (\Exception $e) {
                Log::error('Error sending email: ' . $e->getMessage());
            }

            session()->flash('message', 'Data stored successfully!');
//            $this->emit('formSubmitted');
            return redirect(route('profile',auth()->user()->token));

        } catch (\Exception $e) {
            $this->addError('form', 'An unexpected error occurred.');
            session()->flash('error', 'Something went wrong. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.cart-vps',[
            'plan' => $this->plan,
            'priceSelectedBox' => $this->selectedBox,
            'discount' => $this->discount,
        ]);
    }
}

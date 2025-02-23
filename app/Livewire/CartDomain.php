<?php

namespace App\Livewire;

use App\Mail\OrderMail;
use App\Models\Coupon;
use App\Models\DomainSubscription;
use App\Models\Order;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class CartDomain extends Component
{
    use WithFileUploads;
    public $domain; public $dom; public $subs_id;
    public $selectedBox; public $num_months = 12;  public $currentStep = 1;
    public $discount = 00.0; public $promoCode;
    public $name, $email, $PhoneNumber, $PhoneTransaction, $imageUpload;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
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

    public function mount($domain)
    {
        $this->domain = $domain;

        $this->selectedBox = $this->domain->price_1_year;
    }

    public function selectBox($boxNumber)
    {
        if($boxNumber == 1) {
            $this->num_months = 12;
            $this->selectedBox = $this->domain->price_1_year * 12;
        }
        else if($boxNumber == 2) {
            $this->num_months = 24;
            $this->selectedBox = $this->domain->price_2_years * 24;
        } else if($boxNumber == 3) {
            $this->num_months = 48;
            $this->selectedBox = $this->domain->price_3_years * 48;
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
                $subscription = DomainSubscription::findOrFail($this->subs_id);
                $dns1 = $subscription->dns1;
                $dns2 = $subscription->dns2;
                $dns3 = $subscription->dns3;
                $dns4 = $subscription->dns4;
            } else {
                $type = 'new';
                $dns1 = NULL;
                $dns2 = NULL;
                $dns3 = NULL;
                $dns4 = NULL;
            }

            $order =  Order::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['PhoneNumber'],
                'transaction_number' => $validatedData['PhoneTransaction'],
                'image_path' => $validatedData['imageUpload'],
                'customer_id' => auth()->user()->customer->id,
                'product' => $this->dom,
                'domain_plan_id' => $this->domain->id,
                'num_months' => $this->num_months,
                'disCount' => $this->discount,
                'type' => $type,
                'total' => $this->selectedBox - $this->discount + (($this->selectedBox- $this->discount) * .14),
            ]);

            DomainSubscription::create([
                'order_id' => $order->id,
                'start_date' => now(),
                'end_date' => Carbon::now()->addMonths($this->num_months),
                'status' => 'pending',
                'dns1' => $dns1,
                'dns2' => $dns2,
                'dns3' => $dns3,
                'dns4' => $dns4,
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
            return redirect(route('profile'));

        } catch (\Exception $e) {
            $this->addError('form', 'An unexpected error occurred.');
            session()->flash('error', 'Something went wrong. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.cart-domain',[
            'plan' => $this->domain,
            'priceSelectedBox' => $this->selectedBox,
            'discount' => $this->discount,
        ]);
    }
}

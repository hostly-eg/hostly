@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="../assets/css/bootstrap2.min.css">
    <style>
        * {
            box-sizing: border-box;
            padding: 0px;
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .box.active {
            border-color: #007bff;
            background-color: #f0f8ff;
        }

        .boxshadow {
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        }

        .progress-steps {


            width: 100%;
        }

        .progress-steps .top {
            margin-bottom: 30px;
            position: relative;
            margin-top: 150px;
        }

        .progress-steps .top .progress {
            width: 100%;
            height: 3px;
            background-color: #e0e0e0;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            z-index: -1;
        }

        .progress-steps .top .progress span {
            position: absolute;
            width: 0%;
            height: 100%;
            left: 0px;
            top: 0px;
            background: #3498db;
            transition: 0.5s;
        }

        .progress-steps .top .steps {
            display: flex;
            justify-content: space-between;
        }

        .progress-steps .top .steps .step {
            background-color: white;
            border: 3px solid #e0e0e0;
            border-radius: 50%;
            padding: 5px 10px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        .progress-steps .top .steps .step.active {
            border-color: #3498db;
            transition: border 1s;
            background: #3498db;
            color: #fff;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 0px 20px;
        }

        .buttons .btn {
            outline: 0px;
            border: 0px;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #3498db;
            font-weight: bold;
            color: white;
            transition: color 0.5s;
        }

        .progress-steps .buttons .btn.disabled {
            background-color: #e0e0e0;
            color: #bdbdbd;
            cursor: no-drop;
        }

        .file-input-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 20px;
        }

        .file-input-label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .file-input-label:hover {
            background-color: #2980b9;
        }

        .file-input {
            display: none;
            /* Hide the actual file input */
        }

        .preview-container {
            width: 250px;
            height: 250px;
            border: 2px dashed #3498db;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
        }

        .image-preview {
            display: none;
            /* Hide the image until it's selected */
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        a {
            text-decoration: none;
        }

        .fs-7 {
            font-size: 12px;
        }

        .box.active {
            border: #007bff solid 2px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container my-5 ">
        {{ $domain }}
        <livewire:cart-domain :domain="$domain" :dom="$dom" :subs_id="$subs_id"/>
    </div>
@endsection
@section('script')

@endsection

@extends('template.invoicemaster')
@section('title', 'Pago')
@section('head')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

        body {
            font-family: 'Maven Pro', sans-serif;
        }

        hr {
            color: #30b3a8;
            margin-top: 5px;
            margin-bottom: 5px
        }

        .add td {
            color: #30b3a8;
            text-transform: uppercase;
            font-size: 12px
        }

        .content {
            font-size: 14px
        }

    </style>
@endsection
@section('content')

    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2"> <img src="{{ asset('img/logo/sip.png') }}" width="48">
                        <div class="d-flex flex-column"> <span class="font-weight-bold">Factura</span>
                            <small>INV-{{ $payment->id }}</small>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>From</td>
                                    <td>To</td>
                                </tr>
                                <tr class="content">
                                    <td class="font-weight-bold"> {{Helper::dateDayFormat($payment->transaction->check_in)}}</td>
                                    <td class="font-weight-bold"> {{Helper::dateDayFormat($payment->transaction->check_out)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Descripción</td>
                                    <td class="text-center">Días</td>
                                    <td class="text-center">Precio de la habitación / Día</td>
                                    <td class="text-center">Precio total</td>
                                </tr>
                                <tr class="content">
                                    <td>{{ $payment->transaction->room->type->name }} -
                                        {{ $payment->transaction->room->number }}</td>
                                    <td class="text-center">{{ $payment->transaction->getDateDifferenceWithPlural() }}
                                    </td>
                                    <td class="text-center">
                                        {{ Helper::convertToRupiah($payment->transaction->room->price) }}</td>
                                    <td class="text-center">
                                        {{ Helper::convertToRupiah($payment->transaction->getTotalPrice()) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td></td>
                                    <td class="text-center">Pago inicial mínimo</td>
                                    <td class="text-center">Pagado</td>
                                    <td class="text-center">Pago insuficiente</td>
                                </tr>
                                <tr class="content">
                                    <td></td>
                                    <td class="text-center">
                                        {{ Helper::convertToRupiah($payment->transaction->getMinimumDownPayment()) }}</td>
                                    <td class="text-center">{{ Helper::convertToRupiah($payment->price) }}</td>
                                    <td class="text-center">
                                        {{ $payment->transaction->getTotalPrice() - $payment->transaction->getTotalPayment() <= 0 ? '-' : Helper::convertToRupiah($payment->transaction->getTotalPrice($payment->transaction->room->price, $payment->transaction->check_in, $payment->transaction->check_out) - $payment->transaction->getTotalPayment()) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="address p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Detalles del cliente</td>
                                </tr>
                                <tr class="content">
                                    <td>
                                        Identificación del cliente: {{ $payment->transaction->customer->id }}
                                        <br>Nombre del cliente : {{ $payment->transaction->customer->name }}
                                        <br> Trabajo del cliente : {{ $payment->transaction->customer->job }}
                                        <br> Dirección del cliente : {{ $payment->transaction->customer->address }}
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

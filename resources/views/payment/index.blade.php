@extends('template.master')
@section('title', 'Pago')
@section('content')

    <div class="card shadow-sm border">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Habitación</th>
                        <th scope="col">Pagado</th>
                        <th scope="col">Estado</th>
                        <th scope="col">En</th>
                        <th scope="col">Servido por</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($payments as $payment)
                        <tr>
                            <th scope="row">{{ ($payments->currentpage() - 1) * $payments->perpage() + $loop->index + 1 }}
                            </th>
                            <td>{{ $payment->transaction->room->number }}</td>
                            <td>{{ Helper::convertToRupiah($payment->price) }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ Helper::dateFormatTime($payment->created_at) }}</td>
                            <td>{{ $payment->user->name }}</td>
                            <td> <a href="{{ route('payment.invoice', $payment->id) }}">Factura</a> </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="6">No se encontró ningún pago en la base de datos.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('body')

<section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
        <button href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</button>
        <p>Invoice</p>
    </header>
    <section class="scrollable wrapper" id="print">
        <div class="row">
            <div class="col-xs-6">
                <h2 style="margin-top: 0px">INFORTECH <b>Solutions</b></h2>
                <p>1 Infinite Loop <br>
                    95014 Cuperino, CA<br>
                    United States
                </p>
            </div>
            <div class="col-xs-6 text-right">
                <h4>INVOICE</h4>
            </div>
        </div>
        <div class="well m-t" style="margin-bottom: 50px">
            <div class="row">
                <div class="col-xs-6">
                    <strong>TO:</strong>
                    <h4>{{ $order->name }}</h4>
                    <p>
                        {{ $order->address }}
                    </p>
                </div>
                <div class="col-xs-6 text-right">
                    <p class="h4">#{{ $order->id }}</p>
                    <h5>{{ $order->delivery_date }}</h5>
                    <p class="m-t m-b">Order date: <strong>26th Mar 2013</strong><br>
                        Order ID: <strong>#9399034</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <table class="table">
            <thead>
            <tr>
                <th width="60">QTY</th>
                <th>DESCRIPTION</th>
                <th width="120">TOTAL</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>{{ $order->product_id }}</td>
                <td>Tk {{ $order->amount }}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-right"><strong>Subtotal</strong></td>
                <td>Tk {{ $order->amount }}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-right no-border"><strong>VAT Included in Total</strong></td>
                <td>$0.00</td>
            </tr>
            <tr>
                <td colspan="2" class="text-right no-border"><strong>Total</strong></td>
                <td><strong>TK {{ $order->amount }}</strong></td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-xs-8">
                <p><i> Buy goods  cdsncl dskjckjds sdc dsjbc dsv sdjuguas csaasooief aihashasfnsakoasss sa fosafosa yfoasyfoaisfoa asfas f sa foyaosyosayf as f asyofyoasyfas as</i></p>

                <p>Recvied By: __________________ </p>
            </div>
        </div>
    </section>
</section>

@endsection
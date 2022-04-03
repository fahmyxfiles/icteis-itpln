<x-web-layout>
    <x-slot name="title">Fee Types</x-slot>
    <x-slot name="styles">
        <style>
            .fees-flex {
                display: flex;
                justify-content: space-between;
                gap: 20px;
            }
            /* CARD */
.feeCard {
  height: 100%;
  padding: 40px;
  background: #fbfaf9;
}

.cardHeader {
  display: flex;
  align-items: center;
  gap: 40px;
}

.cardIcon {
  background: #1455fe;
  padding: 20px;
  width: 64px;
  height: 64px;
  border-radius: 4px;
}

.type {
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 28px;
  color: rgba(30, 32, 41, 0.6);
}

.presenter {
  font-style: normal;
  font-weight: normal;
  font-size: 28px;
  line-height: 40px;
  color: #1e2029;
}

.cardBody {
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 28px;
  color: rgba(30, 32, 41, 0.8);
  margin: 40px 0;
}

.cardFooter {
  margin-top: 4px;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 28px;
  color: rgba(30, 32, 41, 0.8);
}

.cardFooter span {
  font-style: normal;
  font-weight: bold;
  font-size: 24px;
  line-height: 32px;
  color: #1e2029;
}

.price {
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 28px;
  color: rgba(30, 32, 41, 0.6);
}

        </style>
    </x-slot>
    <section class="page-title bg-title overlay-dark">
        <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <div class="title">
                <h3>Fees</h3>
            </div>
            <ol class="breadcrumb p-0 m-0">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Fee Types</li>
            </ol>
            </div>
        </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <div class="fees-flex">
                        @foreach($feetypes as $feetype)
                        <div class="feeCard">
                          <div class="cardHeader">
                            <div class="cardIcon">
                              <img src="{{ asset('images/presenter.svg') }}" alt="presenterIcon">
                            </div>
                            <div class="cardTitle">
                              <div class="type">TYPE</div>
                              <div class="presenter">{{$feetype->type}}</div>
                            </div>
                          </div>
                          <div class="cardBody">{{$feetype->description}}</div>
                          <div class="cardFooter">
                            <div class="price">PRICE</div>
                            <span>{{$feetype->price}}</span> / paper
                          </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <h3>@setting('web.fee.payment.title')</h3>
                    <p>@setting('web.fee.payment.subtitle')</p>
                    <div class="mt-5">@setting('web.fee.payment.instruction')</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <h3>@setting('web.fee.toc.title')</h3>
                    <p>@setting('web.fee.toc.subtitle')</p>
                    <div class="mt-5">@setting('web.fee.toc.content')</div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
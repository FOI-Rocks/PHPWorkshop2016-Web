@extends('master.frontend')

@section('pageTitle')
    Home
@endsection

@section('content')
    <div class="ui vertical masthead">
        @include('partials.frontend-nav')
        <div class="ui center aligned container intro">
            <img src="{{ asset('img/foi-rocks-workshop-logo.png') }}">
            <h1>Izrada modernih PHP aplikacija u praksi</h1>
            <span class="tagline">Radionica koja uvodi studente u metodologiju, principe i najbolje prakse izrađivanja modernih web aplikacija u PHP-u na praktičnom primjeru.</span>
        </div>
    </div>
    <div class="ui center aligned container" style="margin-bottom: 70px">
    <span style="font-weight: 200; font-size: 1.4em;">
        Samostalno si radio/la na PROG1, PROG2, WebDiP-u i sličnim kolegijima, a čak si ih i položio/la? Ili si jednostavno sam/a dosta programirao/la i pojmovi poput varijabli, klasa i funkcija ti nisu strani? Prijavi se i u opuštenoj atmosferi nauči kako krenuti graditi svoju web aplikaciju te primijeniti osnovne metodologije i alate koji se aktivno koriste u industriji.
    </span>
    </div>
    <br>
    <div class="ui container">
        <div class="ui two column stackable grid">
            <div class="column">
                <h2 class="ui header">
                    <i class="refresh icon"></i>
                    <div class="content">
                        Cijeli proces
                    </div>
                </h2>
                <p>
                    Tijekom radionice proći će se kroz cijeli proces izrade web aplikacije u jeziku koji pokreće većinu interneta - PHP-u. Krenuti će se od samog postavljanja razvojne okoline, upoznavanja s industrijskim alatima i tehnologijama pa sve do temeljnih uzorka dizajna i elemenata koji se nalaze u gotovo svim aplikacijama današnjice.
                </p>
                <p>
                    Saznajte kako i gdje možete pronaći informacije kako bi mogli samostalno raditi na svojim sposobnostima i riješavati probleme na koje naiđete. Najbitnija sposobnost koju možete imati kako bi postali uspješan inženjer je upravo ova! :)
                </p>
            </div>
            <div class="column">
                <h2 class="ui header">
                    <i class="trophy icon"></i>
                    <div class="content">
                        Natjecanje i show-off
                    </div>
                </h2>
                <p>
                    Izrađivati će se klon popularnog online servisa koji većina od nas koristi, kako bi svi radili na nečemu s čijim principom smo dobro upoznati. Na predavanjima će se proći kroz izradu osnovnih funkcionalnosti kako bi se upoznali s osnovnim metodama, a dodatne funkcionalnosti će polaznici moći implementirati samostalno te će im biti dodjeljeni bodovi za svaku funkcionalnost.
                </p>
                <p>
                    U sklopu svakog predavanja predviđeno je par minuta kako bi svaki polaznik pokazao svoj napredak od prošlog tjedna. Upravo na ovom webu biti će moguće pratiti napredak aplikacije svakog polaznika po posebnim kriterijima. Pobjednik osvaja bragging-rights i vjerojatno neku čokoladu/pivu. :D
                </p>
            </div>
        </div>
    </div>
    <div class="ui container" style="margin-top: 75px;">
        <div class="ui two statistics">
            <div class="statistic">
                <div class="text value">
                    <i class="calendar outline icon"></i> Svaka druga subota
                </div>
                <div class="label">
                    Termin
                </div>
            </div>
            <div class="statistic">
                <div class="text value">
                    <i class="student icon"></i> Igor Rinkovec
                </div>
                <div class="label">
                    Predavač
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="ui segment masthead">
        <br>
        <div class="ui container center aligned">
            <p>
                Zbog prirode radionice i prostornih ograničenja postoji kapacitet za 15 polaznika. Ukoliko broj prijava premaši kapacitet prijave će biti filtrirane po prethodnom iskustvu opisanom u prijavi.
            </p>
            <br>
            <a href="https://igorrinkovec.typeform.com/to/uvGYB6" class="ui huge green button">
                Prijavi se
            </a>
        </div>
        <br><br>
    </div>
@endsection
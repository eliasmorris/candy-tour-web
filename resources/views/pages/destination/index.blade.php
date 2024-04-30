@extends('layout.app')
@section('content')


<div class="banner-slider" style="background-image: url(../storage/uploads/banner_destination_detail.jpg)">
    @if(count([$destinyviews]) > 0 )
    @foreach($destinyviews as $destinyview)
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>{{$destinyview->destination_name}}</h1>
        </div>
    </div>
</div>

<div class="country-package pt_80 pb_80">
    <div class="container">
        <div class="row">

            <div class="col align-self-center">
                <div class="country-text">
                    <h2>{{$destinyview->tittle}}</h2>

                    <p>{{$destinyview->description}}</p>

                    <div class="country-social mt_30 tac">
                        <h3>Share Now</h3>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="portfolio-page pt_40 pb_80 bg-area">
    <div class="container wow fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="main-headline">
                    <div class="headline">
                        <h2>{{$destinyview->destination_name}} Packages</h2>
                    </div>
                    <p>Vis111 constituto complectitur an, modo falli eirmod ea has.</p>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <div class="row">
            @if(count([$packageviews]) > 0 )
            @foreach($packageviews as $packageview)
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                <div class="portfolio-item mt_30">
                    <div class="portfolio-bg"></div>
                    <img src="{{ asset('storage/uploads/package_images/' .$packageview->packageimage)}}" alt="">
                    <div class="portfolio-text">
                        <a href="{{ asset('storage/uploads/package_images/' .$packageview->packageimage)}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <div class="photo-title">
                    <a href="{{Route('package.view', $packageview->id)}}">
                        {{ $packageview->packagetrip}}<br>
                        <span class="fz_22"><i class="fas fa-dollar-sign"></i> {{ $packageview->packagecost }}/ Person</span>
                        <br><span class="available-green">(Booking Now)</span>

                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>

    </div>
</div>


<div class="package-tabarea pt_80 pb_80">
    <div class="container">
        <div class="row">
        @if(count([$destinyviews]) > 0 )
        @foreach($destinyviews as $destinyview)
            <div class="col-md-12">
                <div class="main-headline">
                    <div class="headline">
                        <h2>{{$destinyview->destination_name}} Tours</h2>
                    </div>
                    <p>{{$destinyview->description}}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="row mt_30">
            <div class="d-flex align-items-start pack-tab">
                <div class="nav flex-column nav-pills me-4 pack-tab-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">Introduction</button>
                    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Experience</button>
                    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">Weather</button>
                    <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">Hotel</button>
                    <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">Transport</button>
                    <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6" type="button" role="tab" aria-controls="v-pills-6" aria-selected="false">Culture</button>
                </div>
                <div class="tab-content pack-tab-right" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                        <div>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</div>

                        <div><br></div>

                        <div>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</div>

                        <div><br></div>

                        <div>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</div>

                        <div><br></div>

                        <div>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                        <div>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</div>

                        <div><br></div>

                        <div>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                        <div>Vis constituto complectitur an, modo falli eirmod ea has. Ex vis indoctum scriptorem appellantur, nec noluisse perpetua ea. Solum dissentias est ei, ipsum decore ridens qui ei. Mel augue pertinax ne.</div>

                        <div><br></div>

                        <div>Latine sanctus perfecto ad pro. Ut vel molestiae intellegam, in qui ornatus laboramus. Vix aeterno persius ea. Ut animal aliquid vis, at dico accumsan quaestio nam, vero discere corrumpit vel cu.</div>

                        <div><br></div>

                        <div>Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut. Id illum tantas gloriatur duo. Vis ne prima cetero, erant iusto democritum at vim. Ne integre vivendum delicata eum, ei erat senserit qui.</div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                        <div>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</div>

                        <div><br></div>

                        <div>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.</div>

                        <div><br></div>

                        <div>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.</div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                        <div>An usu natum aperiri accommodare, hendrerit tincidunt quo ne. Est ei unum illum mucius, nemore alterum corpora at ius. Vis nostro nominati electram ex, aeterno voluptatum interesset an usu, pri iudico evertitur ad. Purto oratio ullamcorper mea ad.</div>

                        <div><br></div>

                        <div>Ei qui possim abhorreant, ei eam iudico disputando interpretaris. Augue nusquam delectus per ex, sit no affert eloquentiam. Ei duo etiam fabellas evertitur, apeirian probatus corrumpit mel ei, mei exerci argumentum eu. Nobis essent inciderint in ius, has eu vide referrentur. Cu causae cetero eos, mea id aliquam adipisci pertinax. Lobortis laboramus contentiones ex ius.</div>

                        <div><br></div>

                        <div>Eius appetere scribentur ei sea, ex quo iudicabit neglegentur. Id commodo mediocrem tincidunt eum. Deleniti vivendum vituperatoribus mea ea, mea debet movet commodo cu, at eum tantas sententiae. Mei delectus vituperatoribus ei. Ei causae maiestatis nam, no his tantas dolorem.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
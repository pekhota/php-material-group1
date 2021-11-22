<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <button onclick="refreshTicker()">
        Refresh table
    </button>
    <div id="table" class="col-10 col-sm-8 col-lg-6">
        table
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    let elem

    function loadFromServer() {
        $.get( "/ticker2", function( data ) {
            elem.html( data )
        });
    }

    function refreshTicker() {
        loadFromServer()
    }

    $( document ).ready(function() {
        elem = $( "#table" )

        setInterval(loadFromServer, 5000)
        cb();
    });
</script>
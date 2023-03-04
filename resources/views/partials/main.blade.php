<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    {{-- Feathericon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <title>Technonet</title>

  </head>
  <body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- MAIN BODY  --}}
 <div class="wrap">
     <div class="bg">
     <section>
      <div class="title"> <main>
        <h1>Technonet Solution</h1>
        <h2>Siap Melayani Anda!</h2>
      </main>
      </div>
      <div class="service">
        <h2>Layanan Kami</h2>
        <br>
        <p>Kami melayani berbagai</p>
        <p>macam instalasi, perbaikan,</p>
        <p>perawatan, pemasangan</p>
        <p>pembuatan layanan digital</p>
      </div>
      <div class="button">
        {{-- <a href="#" id="left"><i data-feather="arrow-left-circle"></i></a> --}}
        <a href="#" class="right"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 24 24"><path fill="white" d="M11.325 15.325q.275.275.688.263t.687-.288q.275-.275.275-.7t-.275-.7l-.9-.9h3.225q.425 0 .7-.287T16 12q0-.425-.288-.712T15 11h-3.2l.925-.925q.275-.275.263-.688T12.7 8.7q-.275-.275-.7-.275t-.7.275l-2.6 2.6q-.275.275-.275.7t.275.7l2.625 2.625ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z"/></svg></a>
       <a href="#" class="left"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 24 24"><path fill="white" d="m12.7 15.3l2.6-2.6q.275-.275.275-.7t-.275-.7l-2.625-2.625q-.275-.275-.688-.263T11.3 8.7q-.275.275-.275.7t.275.7l.9.9H8.975q-.425 0-.7.288T8 12q0 .425.288.713T9 13h3.2l-.925.925q-.275.275-.263.688t.288.687q.275.275.7.275t.7-.275ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z"/></svg></a>
      </div>  
    
      </div>
      
      <div class="wrapper">
        <div class="cards_wrap">
          <div class="card_item">
            <div class="card_inner">
              <div class="card_top">
                <img src="img/rpc.png" alt="car" width="100%"/>
              </div>
              <div class="card_bottom">
                <div class="card_category">
                  <h4>Reparasi PC</h2>
                </div>
                <div class="card_info">
                  <p>
                    Technonet Solution memberikan layanan reparasi ataupun service PC / Laptop panggilan ke rumah
                  </p>
                </div>
              
              </div>
          </div>
        </div>
  </div>
    
    </section>
    
      

        {{-- <div class="flex items-center justify-center w-full">
          {{-- <img src="img/phone.png" alt="" class="phone"></a> --}}
        {{-- </div> --}} 
       
     
   
   
   
   
{{-- icons --}}
    <script>
        feather.replace()
      </script>
      

    {{-- Javascript --}}
      <script src="js/script.js"></script>

    {{--BOOTSTRAP --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    

</head>
<body class="vh100 container-fluid d-flex flex-column justify-content-between m-0 p-0">

        <x-offcanvas />
        <div>spazio</div>
        <x-navbar/>
            @if (session()->has('access.denied'))
            <div class="flex flex-row justify-center my 2 alert alert-danger">
                {{session('access.denied')}}
            </div>
            @endif

            @if (session()->has('message'))
                <div class="flex flex-row justify-center my 2 alert alert-success">
                    {{session('message')}}
                </div>
            @endif


        {{$slot}}
        
        <x-footer/>
    @livewireScripts
    <script>
        var toggleCounter = 0
        let toggleSkin = document.getElementById('skinButton');
        toggleSkin.addEventListener('click',function()
          {
            toggleCounter++
            console.log(toggleCounter);
            let targetGreen = Array.from(document.getElementsByClassName('bg-green'));
            let targetBlue = Array.from(document.getElementsByClassName('bg-blue'));
            let targetGradient0 = Array.from(document.getElementsByClassName('gradient0'))
            let targetGradient1 = Array.from(document.getElementsByClassName('gradient1'))

            let targetPink = Array.from(document.getElementsByClassName('bg-pink'));
            let targetLightblue = Array.from(document.getElementsByClassName('bg-lightblue'));
            let targetGradient2 = Array.from(document.getElementsByClassName('gradient2'));
            let targetGradient3 = Array.from(document.getElementsByClassName('gradient3'));

            if (toggleCounter%2 == 0)
            {
                toggleColors(targetGreen,'bg-green','bg-pink');
                toggleColors(targetBlue,'bg-blue','bg-lightblue');
                toggleColors(targetGradient0,'gradient0','gradient2');
                toggleColors(targetGradient1,'gradient1','gradient3');
                return Cookie.set('colorPreference','scheme2');   
            }
            else
            {
                toggleColors(targetPink,'bg-pink','bg-green');
                toggleColors(targetLightblue,'bg-lightblue','bg-blue');
                toggleColors(targetGradient2,'gradient2','gradient0');
                toggleColors(targetGradient3,'gradient3','gradient1');
                return Cookie.set('colorPreference','scheme1');   
            }
        
          });
          function toggleColors(target,classToRemove,classToAdd)
          {
            target.forEach(function(element)
            {
                element.classList.remove(classToRemove);
                element.classList.add(classToAdd);
            });
          }
        function toggleGreen()
        {

        }

        function togglePink()
        {
        
        }
      </script>
</body>
</html>
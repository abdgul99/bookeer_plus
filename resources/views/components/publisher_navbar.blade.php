<img class="lg:hidden float-right p-5 mt-2" src="{{asset('assets/hamburger.png')}}" alt="">
<div class="hidden mt-10 lg:mt-0  lg:block" id="navitems">
    <nav class="grid justify-center lg:block ">
        <div class="grid  lg:grid-cols-3 max-w-5xl space-y-5 mx-auto items-center justify-between py-6">
            <div class="text-sm mx-auto font-semibold">出版社と執筆者のマッチングサービス</div>
            <div class="mx-auto"><img src="{{asset('assets/logo1.png')}}" alt=""></div>
            <div class="mx-auto">
                <ul class="flex gap-5">
                    @if(auth())
                    <li><a href="#"><img src="{{asset('assets/profile2.png')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/chat.png')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/faverout.png')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/logout.png')}}" alt=""></a></li>
                    @endif
                </ul>
            </div>
        </div>
        <p class="text-center font-semibold text-sm ">ようこそ ●●●●●●●さんマイページ</p>
    </nav>
    <img class="w-full absolute top-6 -z-10" src="{{asset('assets/publisher_hero.png')}}" alt="">
</div>

<nav>

</nav>

<script>
const navitem = document.getElementById('navitems')
navitem.classList.toggle('hidden');
</script>
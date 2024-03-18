{{-- black footer desktop view --}}
@if (Auth::check() && Auth::user()->type == 'publisher')
    @php
        $backgorund = 'bg-[#F5821F]';
    @endphp
@else
    @php
        $backgorund = 'bg-black';
    @endphp
@endif
<div class="w-full relative bottom-0 mb-0 ">
    <footer class="{{ $backgorund }} p-4 text-white w-full hidden lg:block relative bottom-0">
        <div class="grid lg:grid-cols-4  max-w-5xl mx-auto">
            <div class="mx-auto">
                <p class="text-[10px]">出版社と執筆者のマッチングサービス</p>
                <img class="mt-3 mx-auto" src="{{ asset('assets/footerlogo.png') }}" alt="">
            </div>
            <div class="lg:mx-auto">
                <h2 class="text-[16px] ">株式会社Uni-８</h2>
                <ul class="space-y-2 mt-2 text-[14px] list-disc">
                    <li><a href="term_of_use">term of use</a></li>
                    <li><a href="privacy_policy">privacy policy</a></li>
                    <li><a href="about_company">about</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
            <div>
                <img class="h-full" src="{{ asset('assets/clip.png') }}" alt="">
            </div>
            <div class="flex gap-2 items-end text-[6px] -ml-5">
                <p>Copyright © 2023 Uni-8 lnc. All Rights Reserved.</p>
                <img src="{{ asset('assets/uni8.png') }}" alt="">
            </div>
        </div>
    </footer>
</div>

{{-- black footer mobile view --}}
<footer class="{{ $backgorund }} text-white p-5 px-8 space-y-3 lg:hidden w-full relative bottom-0">
    <p class="text-center">
        Matching Service between Publishers and Authors
    </p>
    <img class="mx-auto" src="{{ asset('assets/footerlogo.png') }}" alt="">
    <a href="{{ route('login') }}" class="p-1"> <button
            class="p-3 px-5  flex items-center justify-between text-black  w-full bg-white ">
            <img src="{{ asset('assets/txt.png') }}" alt="">
            <span>出版社詳細</span>
            <img src="{{ asset('assets/forward.png') }}" alt="">
        </button></a>
    <div class="grid grid-cols-2 text-white">
        <div class="">
            <span class="text-[16px] m-0 p-0">株式会社Uni-８</span>
            <ul class="space-y-2 mt-2 text-[14px] list-disc">
                <li><a href="term_of_use">Term of use</a></li>
                <li><a href="privacy_policy">Privacy Policy</a></li>
                <li><a href="about_company">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <img class="h-full" src="{{ asset('assets/clip.png') }}" alt="">

    </div>
    <p class="text-[10px] text-center">Copyright © 2023 Uni-8 lnc. All Rights Reserved.</p>
</footer>

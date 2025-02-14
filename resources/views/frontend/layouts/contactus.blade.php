<div class="container bg-white contact-container p-0 d-flex justify-content-center align-items-center border-success-subtle border-1">
                
    <div class="contact-info col-lg-8 bg-white ">
        <div class="mx-4 mt-2">
            <h2 class="text-black text-4xl py-3 eng">Let's get in touch</h2>
            <h2 class="text-black text-4xl py-3 amh">ያግኙን</h2>

            @foreach($settings as $setting)
            <p class="text-black eng">{{$setting->short_des}}</p>
            <p class="text-black amh">በአስደናቂው የሃጅ እና ዑምራ ጉዞ እንድትጀምሩ በአል ራያን እንድትገኙ ጋብዘናችኋል። የኛ የወሰነ ቡድን እርስዎ ሊኖርዎት በሚችሉ ማናቸውም ጥያቄዎች፣ ምዝገባዎች ወይም ግላዊ ፍላጎቶች እርስዎን ለመርዳት ዝግጁ ነው። ልዩ አገልግሎቶቻችንን ለመለማመድ እና በመጽናናት፣ በደህንነት እና በመንፈሳዊ እርካታ የተሞላውን ቅዱስ ጉዞ ለማድረግ ዛሬ ያግኙን።</p>
            <div class="">
                <div class="d-flex py-2">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2" height="1.2em" width="1.2em">
                        <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <address class="eng">{{$setting->address}}</address>
                    <address class="amh">3ተኛ ፎቅ, ቢሮ ቁጥር. 304/4 - ቦሌ ፍሬንድሽፕ ህንጻ, ኢትዮጵያ</address>
                </div>
                <div class="d-flex py-1">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2" height="1.2em" width="1.2em">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#080341"></path>
                    </svg>
                    <p> info@alrayan-grp.com / {{$setting->email}}</p>
                </div>
                <div class="d-flex justify-content-start py-3">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2" height="1.2em" width="1.2em">
                        <path d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p>{{$setting->phone}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pt-2">
            <p class="ps-4 eng">Follow us on socials:</p>
            <p class="ps-4 amh">ሶሻል ሚዲያ ላይ ይከተሉን:</p>
            <div class="contact-socials row my-4 ps-4">
                {{-- facebook --}}
                <a href="https://www.facebook.com/Alrayan1446" target="_blank" class="col">
                    <svg width="92px" height="92px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z" fill="#000000"></path> </g></svg>                </a>
                {{-- telegram --}}
                <a href="https://t.me/Alrayan1446" target="_blank" class="col">
                    <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"  width="10px" height="10px"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g> <path d="M29.919 6.163l-4.225 19.925c-0.319 1.406-1.15 1.756-2.331 1.094l-6.438-4.744-3.106 2.988c-0.344 0.344-0.631 0.631-1.294 0.631l0.463-6.556 11.931-10.781c0.519-0.462-0.113-0.719-0.806-0.256l-14.75 9.288-6.35-1.988c-1.381-0.431-1.406-1.381 0.288-2.044l24.837-9.569c1.15-0.431 2.156 0.256 1.781 2.013z"></path> </g></svg>
                </a>
                {{-- twitter --}}
                <a href="https://x.com/alrayan1446" target="_blank" class="col justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 72 72" viewBox="0 0 72 72" id="twitter-x" width="10px" height="10px"><switch><g><path d="M42.5,31.2L66,6h-6L39.8,27.6L24,6H4l24.6,33.6L4,66
                        h6l21.3-22.8L48,66h20L42.5,31.2z M12.9,10h8l38.1,52h-8L12.9,10z"></path></g></switch></svg>                </a>
                        {{-- instagram --}}
                <a href="https://www.instagram.com/alrayanumrah" target="_blank" class="col">
                    <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" width="10px" height="10px"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <rect x="15.5" y="9" width="2" height="2" rx="1" transform="rotate(-90 15.5 9)" fill="#000000"></rect> <rect x="16" y="8.5" width="1" height="1" rx="0.5" transform="rotate(-90 16 8.5)" stroke="#000000" stroke-linecap="round"></rect> </g></svg>
                </a>
                {{-- linkedin --}}
                <a href="https://www.linkedin.com/in/alrayan-alrayan-11aa19311/" target="_blank" class="col">
                    <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none" width="10px" height="10px"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g><rect width="132" height="132" x="30" y="30" stroke="#000000" stroke-width="12" rx="16"></rect><path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" d="M66 86v44"></path><circle cx="66" cy="64" r="8" fill="#000000"></circle><path stroke="#000000" stroke-linecap="round" stroke-width="12" d="M126 130v-26c0-9.941-8.059-18-18-18v0c-9.941 0-18 8.059-18 18v26"></path></g></svg>
                </a>
                {{-- tiktok --}}
                <a href="https://www.tiktok.com/@alrayan840?lang=en" target="_blank" class="col">
                    <svg fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="10px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>tiktok</title> <path d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"></path> </g></svg>                </a>
                {{-- whatsapp --}}
                <a href="https://wa.me/251933444400" target="_blank" class="col">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="10px" height="10px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.6 6.31999C16.8669 5.58141 15.9943 4.99596 15.033 4.59767C14.0716 4.19938 13.0406 3.99622 12 3.99999C10.6089 4.00135 9.24248 4.36819 8.03771 5.06377C6.83294 5.75935 5.83208 6.75926 5.13534 7.96335C4.4386 9.16745 4.07046 10.5335 4.06776 11.9246C4.06507 13.3158 4.42793 14.6832 5.12 15.89L4 20L8.2 18.9C9.35975 19.5452 10.6629 19.8891 11.99 19.9C14.0997 19.9001 16.124 19.0668 17.6222 17.5816C19.1205 16.0965 19.9715 14.0796 19.99 11.97C19.983 10.9173 19.7682 9.87634 19.3581 8.9068C18.948 7.93725 18.3505 7.05819 17.6 6.31999ZM12 18.53C10.8177 18.5308 9.65701 18.213 8.64 17.61L8.4 17.46L5.91 18.12L6.57 15.69L6.41 15.44C5.55925 14.0667 5.24174 12.429 5.51762 10.8372C5.7935 9.24545 6.64361 7.81015 7.9069 6.80322C9.1702 5.79628 10.7589 5.28765 12.3721 5.37368C13.9853 5.4597 15.511 6.13441 16.66 7.26999C17.916 8.49818 18.635 10.1735 18.66 11.93C18.6442 13.6859 17.9355 15.3645 16.6882 16.6006C15.441 17.8366 13.756 18.5301 12 18.53ZM15.61 13.59C15.41 13.49 14.44 13.01 14.26 12.95C14.08 12.89 13.94 12.85 13.81 13.05C13.6144 13.3181 13.404 13.5751 13.18 13.82C13.07 13.96 12.95 13.97 12.75 13.82C11.6097 13.3694 10.6597 12.5394 10.06 11.47C9.85 11.12 10.26 11.14 10.64 10.39C10.6681 10.3359 10.6827 10.2759 10.6827 10.215C10.6827 10.1541 10.6681 10.0941 10.64 10.04C10.64 9.93999 10.19 8.95999 10.03 8.56999C9.87 8.17999 9.71 8.23999 9.58 8.22999H9.19C9.08895 8.23154 8.9894 8.25465 8.898 8.29776C8.8066 8.34087 8.72546 8.403 8.66 8.47999C8.43562 8.69817 8.26061 8.96191 8.14676 9.25343C8.03291 9.54495 7.98287 9.85749 8 10.17C8.0627 10.9181 8.34443 11.6311 8.81 12.22C9.6622 13.4958 10.8301 14.5293 12.2 15.22C12.9185 15.6394 13.7535 15.8148 14.58 15.72C14.8552 15.6654 15.1159 15.5535 15.345 15.3915C15.5742 15.2296 15.7667 15.0212 15.91 14.78C16.0428 14.4856 16.0846 14.1583 16.03 13.84C15.94 13.74 15.81 13.69 15.61 13.59Z" fill="#000000"></path> </g></svg>                
                </a>
                  
            </div>
        </div>
    </div>


<div class="eng contact-message col-lg-4 ms-lg-0 d-flex justify-content-center bg-dark border rounded-4 border-success-subtle border-3">
    <form class="w-75 text-white m-4 p-4 py-5 form eng" method="post" action="{{route('frontend.storemessage')}}" id="contact-Form">
        <h3 class="text-white text-2xl">Contact us</h3>
        @csrf
        <div class="mt-4">
            <div class="flex">
                <input type="text" name="name" placeholder="Full Name" class="form-control" id="fullname" value="{{old('name')}}">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <input type="email" name="email" placeholder="Email" class="form-control" id="email" value="{{old('email')}}">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <input type="tel" name="phone" placeholder="Phone" class="form-control" id="phone" value="{{old('phone')}}">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <textarea name="message" class="form-control" placeholder="Enter your message here..." id="message">{{old('message')}}</textarea>
            </div>
        </div>
        
        <div class="mt-4">
            <div class="d-flex justify-content-center">
                <button type="submit" class=" rounded-pill btn  send">Send</button>
            </div>
        </div>
    </form>
    <form class="w-75 text-white m-4 p-4 py-5 form amh" method="post" action="{{route('frontend.storemessage')}}" id="contact-Form">
        <h3 class="text-white text-2xl">ጻፉልን</h3>
        @csrf
        <div class="mt-4">
            <div class="flex">
                <input type="text" name="name" placeholder="ሙሉ ስም" class="form-control" id="fullname" value="{{old('name')}}">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <input type="email" name="email" placeholder="ኢሜል" class="form-control" id="email" value="{{old('email')}}">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <input type="tel" name="phone" placeholder="ስልክ" class="form-control" id="phone" value="{{old('phone')}}">
            </div>
        </div>
        <div class="mt-4">
            <div class="">
                <textarea name="message" class="form-control" placeholder="መልክትዎን ያስገቡ..." id="message">{{old('message')}}</textarea>
            </div>
        </div>
        
        <div class="mt-4">
            <div class="d-flex justify-content-center">
                <button type="submit" class=" rounded-pill btn  send">ላክ</button>
            </div>
        </div>
    </form>
    
</div>

</div>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Thank you for reaching out to us!');
        this.submit();
    });
    </script>
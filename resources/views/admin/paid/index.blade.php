<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to Home Cafe
        </h2>
    </x-slot>
    <div class="py-12">
        <div class = 'container'>
               <div class="col-md-8">
               <h1>คำสั่งซื้อสำเร็จ</h1>
               </div>
                
               <div class="col-md-4">
                    <div class='card'>
                        <div class='card-body'>
                            <form action="/dashboard" method="get">
                            @csrf
                            <input type=submit value ="กลับหน้าร้านค้า" class = "btn btn-primary">
                            </from>
                        </div>
                   </div>
               </div>
            </dib>
        </div>
    </div>
</x-app-layout>

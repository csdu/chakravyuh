@foreach(range(2, 10) as $i)
    <div class="w-11/12 mx-auto mb-1 px-4 py-2 rounded-lg text-shadow-md flex items-center justify-center font-extrabold text-left group hover:shadow-md hover:bg-light-brown">
        <div class="w-5 group-hover:text-orange-400">{{ $i }}</div>

        <div class="mx-3 xl:mx-4 inline-flex items-center flex-1">
            <img class="h-8 w-8 xl:h-10 xl:w-10 my-auto mr-3 xl:mr-4 rounded-full shadow-md border-2 border-primary group-hover:border-yellow-100" 
                src="https://i1.sndcdn.com/avatars-000343928089-mj2j87-t500x500.jpg" 
                alt=""> 
            <div class="w-9/12 flex-1 text-sm text-orange-400 group-hover:text-yellow-100">Eloffc fkfkfkf Shrsjsjd</div>
        </div>

        <div class="text-xs flex flex-col justify-between">
            <div class="mx-auto">
                <span class="flex items-center">
                    <span class="w-3 h-3 mr-1">
                        <img src="/images/coin.svg">
                    </span><span class="text-orange-400 group-hover:text-yellow-100">10</span>
                </span>
            </div>
            <div class="uppercase font-extrabold group-hover:text-orange-400">
                <span>LVL 50</span>
            </div>
        </div>
    </div>
@endforeach
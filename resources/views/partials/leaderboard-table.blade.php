@forelse($users as $i => $user)
    <div class="w-full h-full mx-auto mb-1 px-4 py-2 rounded-sm text-shadow-md flex items-center justify-center font-extrabold text-left group hover:shadow-md hover:bg-light-brown">
        <div class="w-5 group-hover:text-orange-400">{{ $i + 1 }}</div>

        <div class="mx-2 xl:mx-4 inline-flex items-center flex-1">
            <img class="h-8 w-8 xl:h-10 xl:w-10 my-auto mr-3 xl:mr-4 rounded-full shadow-md border-2 border-primary group-hover:border-yellow-100"
                src="{{ $user->avatar_url }}"
                alt="">
            <div class="w-9/12 flex-1 text-sm text-orange-400 group-hover:text-yellow-100">{{ $user->name }}</div>
        </div>

        <div class="text-xs flex flex-col justify-between">
            <div class="mx-auto">
                <span class="flex items-center">
                    <span class="w-3 h-3 mr-1">
                        <img src="/images/coin.svg">
                    </span><span class="text-orange-400 group-hover:text-yellow-100">{{ $user->total_score }}</span>
                </span>
            </div>
            <div class="uppercase font-extrabold group-hover:text-orange-400">
                <span>LVL {{ $user->level }}</span>
            </div>
        </div>
    </div>
@empty
    <div class="w-full h-full mx-auto mb-1 px-4 py-2 rounded-sm text-shadow-md flex items-center justify-center font-extrabold text-left group hover:shadow-md bg-light-brown">
        No records Available
    </div>
@endforelse

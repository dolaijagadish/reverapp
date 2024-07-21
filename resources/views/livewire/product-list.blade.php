<div class="grid grid-cols-3 gap-3">
    @foreach ($products as $product)
    <div wire:key="product_{{ $product->id }}"
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                {{ $product->name }}
            </h3>
            <p class="mt-2 text-gray-500 dark:text-neutral-400">
                {{ $product->amount }}
            </p>
            <div class="text-red-600 hover:cursor-pointer mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 32 32" wire:click="deleteProduct('{{ $product->id }}')">
                    <path fill="currentColor"
                        d="m20.826 5.75l.396 1.188c1.54.575 2.59 1.44 2.59 2.626c0 2.405-4.31 3.498-8.313 3.498c-4.004 0-8.312-1.093-8.312-3.498c0-1.272 1.21-2.174 2.938-2.746l.388-1.165C8.07 6.3 6.187 7.53 6.187 9.563v2.264c0 1.224.685 2.155 1.76 2.845l.395 9.265c0 1.38 3.274 2.5 7.312 2.5s7.313-1.12 7.313-2.5l.405-9.493c.885-.664 1.438-1.52 1.438-2.617V9.562c.002-1.937-1.71-3.142-3.984-3.812zm-9.733 18.377c-.476-.286-1.022-.846-1.166-1.237c-1.007-2.76-.73-4.92-.53-7.51c.748.28 1.58.492 2.45.643c-.215 2.658-.43 4.923.004 7.828c.066.428-.283.56-.757.277zm6.126.202c-.02.444-.692.855-1.518.855c-.828 0-1.498-.413-1.517-.858c-.126-2.996-.032-5.322.068-8.04c.418.023.835.038 1.246.038c.542 0 1.096-.02 1.65-.06c.1 2.73.196 5.06.07 8.064zm4.256-1.438c-.143.392-.69.95-1.165 1.235c-.473.284-.816.15-.753-.276c.437-2.93.214-5.208-.005-7.896c.88-.174 1.708-.417 2.44-.73c.202 2.66.51 4.852-.516 7.668zM11.338 9.512a1.006 1.006 0 0 0 1.268-.633h-.002l.77-2.317h4.56l.772 2.316a1.003 1.003 0 0 0 1.265.632a1 1 0 0 0 .634-1.265l-1.002-3a1 1 0 0 0-.945-.684h-6.002c-.428 0-.812.275-.948.683l-1 3c-.175.524.108 1.09.63 1.266z" />
                </svg>
            </div>
        </div>
    </div>
    @endforeach
</div>
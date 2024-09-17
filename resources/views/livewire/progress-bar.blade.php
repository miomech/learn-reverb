<div>
    <div class="grid grid-cols-4 my-4">
        <div>
            <button wire:click='decrement'
                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Previous Step
            </button>
        </div>
        <div>
            <button wire:click='increment'
                class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Next Step
            </button>
        </div>
    </div>
    <h4 class="sr-only">Status</h4>
    <p class="text-sm font-medium text-gray-900">Doing stuff...[STEP:{{ $step }}
        PROGRESS:{{ $progress }}]</p>
    <div class="mt-6" aria-hidden="true">
        <div class="overflow-hidden rounded-full bg-gray-200">
            <div class="h-2 rounded-full bg-indigo-600" style="width: {{ $progress }}%"></div>
        </div>
        <div class="mt-6 hidden grid-cols-6 text-sm font-medium text-gray-600 sm:grid">
            <div class="text-indigo-600">Step 1</div>
            <div class="text-center text-indigo-600">Step 2</div>
            <div class="text-center">Step 3</div>
            <div class="text-center">Step 4</div>
            <div class="text-center">Step 5</div>
            <div class="text-right">Step 6</div>
        </div>
        <pre class="mt-40">
            @json($progressPositions)
        </pre>
    </div>

</div>

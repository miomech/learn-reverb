<x-guest-layout>
    <div class='dark:text-white' x-data="orderStatus">
        This is order {{ $order->id }} | Status: {{ $order->status->value }}
    </div>

    @push('footer-scripts')
        <script defer>
            document.addEventListener('alpine:init', () => {

                Alpine.data('orderStatus', () => ({
                    init() {
                        console.log('Order Status Component Initialized')
                    }
                }))

            })
        </script>
    @endpush

</x-guest-layout>

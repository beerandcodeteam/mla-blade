<span @class(['font-bold text-sm', 'text-green-500' => $user['id'] % 2 == 0, 'text-red-500' => $user['id'] % 2 != 0])>
    {{ $user['name'] }}
</span>

@pushonce('scripts')
    <script>
        console.log('ola mundo 2')
    </script>
@endpushonce

@prependonce('scripts')
        <script>
            console.log('ola mundo')
        </script>
@endprependonce

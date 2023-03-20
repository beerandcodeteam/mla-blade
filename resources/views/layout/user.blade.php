<span>{{ $user['name'] }}</span>

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

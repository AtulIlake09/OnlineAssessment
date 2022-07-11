<table>
    @php
        $i = 1;
    @endphp
    @foreach ($que_ans as $key => $val)
        <tr style="font-weight: bold;">{{ 'Q.' . $i . ') ' . $key }}</tr>
        <tr>Ans:</tr>
        <tr>
            <textarea wrap="hard" class="form-control" placeholder="Leave a comment here" name="answer" id="answer"
                style="width: 500px; height: 200px;">{{ $val }}</textarea>
        </tr>
        @php
            $i++;
        @endphp
    @endforeach
</table>

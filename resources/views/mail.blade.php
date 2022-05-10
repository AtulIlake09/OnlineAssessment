<table>
    @php
    $i=1;
    @endphp    
    @foreach($que_ans as $key=>$val)
        <tr style="font-weight: bold;">{{"Q.".$i.") ".$key}}</tr>
        <tr>{{"Ans.-> ".$val}}</tr>
        @php
        $i++;
        @endphp  
    @endforeach
</table> 
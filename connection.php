<$php 
    $connect = mysqli_connect('localhost', 'root', '', 'wedkowania')
    $request1 = "SELECT akwen, wojewodztwo FROM lowisko WHERE Ryba_id = 1"
    @wynik1 = mysqli_query($connect,$request1)
    while($row1 = mysqli_fetch_row($wynik1))

    echo "$row1[0] $row1[1]"
?>
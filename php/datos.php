<?php
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $sql2 = "SELECT * FROM mensajes WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = $db->prepare($sql2);
        $query2->execute();
        $count2 = $query2->rowCount();
        $row2 = $query2->fetch(PDO::FETCH_ASSOC);
        ($count2 > 0) ? $result = $row2['msg'] : $result ="No hay mensajes";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Tú: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] = 0) ? $offline = "Desconectado" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'" style=\"text-style: none;\">
                    <div class="user-card">
                    <img src="../imagenes/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>
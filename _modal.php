<?php
if(isset($_POST["submit"])){
    if ($user_info["error"] && $user_file["error"]){
        $okThen = 'yes';
        if ($user_info['objet'] == 'info') {
            $modalTitle = "Votre demande d'information à bien été envoyée";
        } else {
            $modalTitle = "Votre inscription à bien été envoyée";
        }
        $modalBody = $user_info['prenom'] . ' ' . $user_info['nom'] . '<br>Email = ' . $user_info['email'] . '<br>' . $user_info['message'];
    }
}
?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $modalTitle ?></h4>
            </div>
            <div class="modal-body">
                <p><?= $modalBody ?></p>
            </div>
        </div>
    </div>
</div>

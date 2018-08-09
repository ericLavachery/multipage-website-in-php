<?php
if(isset($_POST["submit"])){
    if ($okThen == 'yes'){
        if ($user['objet'] == 'info') {
            $modalTitle = "Votre demande d'information à bien été envoyée";
        } else {
            $modalTitle = "Votre inscription à bien été envoyée";
        }
        $modalBody = $user['prenom'] . ' ' . $user['nom'] . '<br>Email = ' . $user['email'] . '<br>' . $user['message'];
    }
}
?>
<!-- Modal -->
<div id="formConfirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php if (isset($modalTitle)) {echo($modalTitle);} ?></h4>
            </div>
            <div class="modal-body">
                <p><?php if (isset($modalBody)) {echo($modalBody);} ?></p>
            </div>
        </div>
    </div>
</div>

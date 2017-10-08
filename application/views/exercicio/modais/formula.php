
<!-- Modal -->
<div class="modal fade" id="ModalFormulas" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Fórmulas</h3>
            </div>
            <div class="modal-body">
                <?php foreach ($formula as $row): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url($row->imagem ) ?>" alt=" " width="250">
                        </div>
                        <div class="col-md-1" id="text-formula">
                            <p><?= $row->expressao ?></p>
                        </div>
                        <div class="col-md-2" id="text-formula">
                            <p><?= $row->nome ?></p>
                        </div>
                        <div class="col-md-5">
                            <p><?= $row->explicacao ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
            <div class="modal-  ">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
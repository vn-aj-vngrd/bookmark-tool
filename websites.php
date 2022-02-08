<div class="col-sm b">
    <div class="section-header" id="buses">
        <h3>Bookmarked Websites</h3>
        <p>The bookmarked websites will be displayed down below.</p>
    </div>
    <div class="bus">

        <?php if (!empty($_SESSION['bookmarks'])) { ?>

            <table class="table table-hover table-bordered" id="tb">


                <?php foreach ($_SESSION['bookmarks'] as $website) { ?>

                    <tbody>
                        <tr>
                            <td>
                                <form method="POST">
                                    <a href="<?php echo $website['url'] ?>" target="_blank" rel="noopener noreferrer"> <?php echo $website['name'] ?> </a>
                                    <input type="hidden" name="id" value="<?php echo $website['id'] ?>">
                                    <button type="submit" name="delete" class="btn-x"><i class="bx bx-x"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                <?php } ?>



            </table>
        <?php } ?>

    </div>
</div>
</div>
</div>

<?php

include('db_connect.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <style>
        input[type=checkbox] {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5); /* IE */
            -moz-transform: scale(1.5); /* FF */
            -webkit-transform: scale(1.5); /* Safari and Chrome */
            -o-transform: scale(1.5); /* Opera */
            transform: scale(1.5);
            padding: 10px;
        }
    </style>
    <div class="col-lg-12">
        <div class="row mb-4 mt-4">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Member List</b>
                        <span class="">
                            <button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_member">
                             
                                <a href="OrderSum.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-condensed table-hover">
                            <colgroup>
                                <col width="5%">
                                <col width="15%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class="">Payment ID</th>
                                <th class="">Final Prize</th>
                                <th class="">Pay method</th>
                                <th class="">Pay status</th>
                                <th class="text-center">Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            $refNo = $conn->query("SELECT * FROM `payment` ORDER BY `refNo` ASC");
                            while ($row = $refNo->fetch_assoc()) :
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++ ?></td>
                                    <td class="">
                                        <p><b><?php echo $row['finalPrice'] ?></b></p>
                                    </td>
                                    <td class="">
                                        <p><b><?php echo $row['payMethod'] ?></b></p>
                                    </td>
                                    <td class="">
                                        <p><b><?php echo $row['payStatus'] ?></b></p>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary view_payment" type="button"
                                                data-`payment`.`refNo`="<?php echo $row['refNo'] ?>">View
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary edit_payment" type="button"
                                                data-`payment`.`refNo`="<?php echo $row['refNo'] ?>">Edit
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger delete_member" type="button"
                                                data-`payment`.`refNo`="<?php echo $row['refNo'] ?>">Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    td {
        vertical-align: middle !important;
    }

    td p {
        margin: unset
    }

    img {
        max-width: 100px;
        max-height: : 150px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('table').dataTable()
    })

    $('#new_member').click(function () {
        uni_modal("<i class='fa fa-plus'></i> New Member", "manage_member.php", 'mid-large')
    })

    $('.view_member').click(function () {
        uni_modal("<i class='fa fa-id-card'></i> Member Details", "view_member.php?id=" + $(this).attr('data-id'), 'large')
    })

    $('.edit_member').click(function () {
        uni_modal("<i class='fa fa-edit'></i> Manage Member Details", "manage_member.php?id=" + $(this).attr('data-id'), 'mid-large')
    })

    $('.delete_member').click(function () {
        _conf("Are you sure to delete this topic?", "delete_member", [$(this).attr('data-id')], 'mid-large')
    })

    function delete_member($id) {
        start_load()
        $.ajax({
            url: 'ajax.php?action=delete_member',
            method: 'POST',
            data: {id: $id},
            success: function (resp) {
                if (resp == 1) {
                    alert_toast("Data successfully deleted", 'success')
                    setTimeout(function () {
                        location.reload()
                    }, 1500)
                }
            }
        })
    }
</script>
</body>
</html>

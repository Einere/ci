<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>BoardList</title>
    </head>
    <body>
        <article id="board_area">
            <header>
                <h1></h1>
                <table border=1 cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" style="width:100px;">번호</th>
                            <th scope="col" style="width:500px;">제목</th>
                            <th scope="col" style="width:150px">작성자</th>
                            <th scope="col" style="width:100px">조회수</th>
                            <th scope="col" style="width:300px">작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;
                            foreach($list as $lt) {
                                ?>
                                <tr>
                                    <th scope="row" style="text-align:center"><?php echo $count++;?></th>
                                    <td style="text-align:center"><?php echo $lt["posttitle"];?></td>
                                    <td style="text-align:center"><?php echo $lt["member_memseq"];?></td>
                                    <td style="text-align:center"><?php echo $lt["postviewcount"];?></td>
                                    <td style="text-align:center"><?php echo $lt["posttime"];?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </article>
    </body>
</html>
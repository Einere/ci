<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>BoardList</title>
    </head>
    <body>
        <div>
            <header id = "header" data-role="header" data-position="fixed">
                <blockquote>
                    <p>
                        <span style="font-size:50px"><strong>BOARD</strong></span>
                </blockquote>
                <dl>
                <div style="float:right; margin-bottom:10px;">
                <?php $id = $this->session->userdata('username');?>
                    <dt><a href="http://www.project_kiwi.com/index.php/modules/board/BoardController/upload/?id=<?= $id; ?>"><input type="submit" value="등록" width="200px" ></a></dt>
                </div></dl>
            </header>
        </div>

        <article id="board_area">
            <header>
                <h1></h1>
                <table border=1 cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width:20px;">체크</th>
                            <th scope="col" style="width:100px;">번호</th>
                            <th scope="col" style="width:500px;">제목</th>
                            <th scope="col" style="width:150px">작성자</th>
                            <th scope="col" style="width:100px">조회수</th>
                            <th scope="col" style="width:300px">작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = $list->num_rows;
                            $num = 0;
                            foreach($list as $lt) {
                                ?>
                                <tr>
                                    <td style="text-align:center"><input type="checkbox" name="checkList"></td>
                                    <th scope="row" style="text-align:center"><?= $count--;?></th>
                                    <td style="text-align:center"><a style="text-decoration:none; color:black" href="http://www.project_kiwi.com/index.php/modules/board/BoardController/detail/<?= $lt["postseq"]?>/<?= 1+$count.'?id='.$this->session->userdata('username');?>"><?= $lt["posttitle"];?></a></td>
                                    <td style="text-align:center"><?= $nickname[$num++];?></td>
                                    <td style="text-align:center"><?= $lt["postviewcount"];?></td>
                                    <td style="text-align:center"><?= $lt["posttime"];?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </article>
        <div>
            <footer id="footer">
                <dl>
                    <?php 
                        if($id!=NULL)
                        {
                            $print='logout';
                        }
                        else
                        {
                            $print='log in';
                        }
                    ?>
                    <dt><form action="http://project_kiwi.com/index.php/modules/member/MemberController"><input type="submit" name="logout" value="<?= $print ?>" width=100px></form></dt>
                    
                </dl>
            </footer>
        </div>
    </body>
</html>

        <section>
            <?php if($this->submitted) {?>
            <div class="alert alert-darken-success" role="alert">
                <center>
                    Stats Updated!
                </center>
            </div>
            <?php }?>
            <div class="container">
                <table style="width:100%">
                    <tr>
                        <th>
                            name
                        </th>
                        <th>
                            level
                        </th>
                        <th>
                            Net Worth
                        </th>
                        <th>
                            Investment
                        </th>
                        <th>
                            bounties
                        </th>
                        <th>
                            Date Updated
                        </th>
                    </tr>
                    <?php for($i = 0; $i < count($this->user); $i++)
                    {?>
                    <tr>
                        <td>
                            <?php echo($this->user[$i]['name']); ?>
                        </td>
                        <td>
                            <?php echo($this->user[$i]['level']); ?>
                        </td>
                        <td>
                            <?php echo($this->user[$i]['worth']); ?>
                        </td>
                        <td>
                            <?php echo($this->user[$i]['investment']); ?>
                        </td>
                        <td>
                            <?php echo($this->user[$i]['total_bounties']); ?>
                        </td>
                        <td>
                            <?php echo($this->user[$i]['last_updated']); ?>
                        </td>
                    </tr>
                    <?php }?>
                </table>
                <br />
                <h2>
                    Update Player Stats
                </h2>
                <form action="" method="post">
                    <table style="width:100%">
                        <tr>
                            <th>
                                name
                            </th>
                            <th>
                                level
                            </th>
                            <th>
                                Net Worth
                            </th>
                            <th>
                                Investment
                            </th>
                            <th>
                                bounties
                            </th>
                        </tr>
                        <?php for($i = 0; $i < count($this->user); $i++)
                        {?>
                        <tr>
                            <td>
                                <?php echo($this->user[$i]['name']); ?>
                            </td>
                            <td>
                                <input type="text" name="<?php echo $this->user[$i]['name']; ?>[level]" />
                            </td>
                            <td>
                                <input type="text" name="<?php echo $this->user[$i]['name']; ?>[worth]" />
                            </td>
                            <td>
                                <input type="text" name="<?php echo $this->user[$i]['name']; ?>[investment]" />
                            </td>
                            <td>
                                <input type="text" name="<?php echo $this->user[$i]['name']; ?>[total_bounties]" maxlength="3" />
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <input type="submit" name="Submit" id="submit" />
                </form>
            </div>
        </section>
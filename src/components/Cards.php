<?php

class Cards
{
    public $pendingCount, $approvedCount, $vaccineCount, $usersCount;

    public function __construct($pendingCount, $approvedCount, $vaccineCount, $usersCount)
    {
        $this->pendingCount = $pendingCount;
        $this->approvedCount = $approvedCount;
        $this->vaccineCount = $vaccineCount;
        $this->usersCount = $usersCount;
    }

    public function render()
    {
        echo <<<HTML
            <div class='row'>
        <div class='col-sm-3 col-xs-6'>

            <div class='tile-stats tile-red'>
                <div class='icon'><i class='entypo-users'></i></div>
                <div class='num' data-start='0' data-end='$this->pendingCount' data-postfix='' data-duration='1500' data-delay='0'>0</div>

                <h3>Pending Appointments</h3>
                <p>Total of pending appointments</p>
            </div>

        </div>

        <div class='col-sm-3 col-xs-6'>

            <div class='tile-stats tile-green'>
                <div class='icon'><i class='entypo-chart-bar'></i></div>
                <div class='num' data-start='0' data-end='$this->approvedCount' data-postfix='' data-duration='1500' data-delay='600'>0</div>

                <h3>Patients</h3>
                <p>Total number of patients</p>
            </div>

        </div>

        <div class='clear visible-xs'></div>

        <div class='col-sm-3 col-xs-6'>

            <div class='tile-stats tile-aqua'>
                <div class='icon'><i class='entypo-mail'></i></div>
                <div class='num' data-start='0' data-end='$this->vaccineCount' data-postfix='' data-duration='1500' data-delay='1200'>0</div>

                <h3>Vaccines</h3>
                <p>Total Available Vaccines</p>
            </div>

        </div>

            <div class='col-sm-3 col-xs-6'>

                <div class='tile-stats tile-blue'>
                    <div class='icon'><i class='entypo-rss'></i></div>
                    <div class='num' data-start='0' data-end='$this->usersCount' data-postfix='' data-duration='1500' data-delay='1800'>0</div>

                    <h3>Users</h3>
                    <p>Total number of users</p>
                </div>

            </div>
        </div>
        
        HTML;
    }
}

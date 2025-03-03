<?php

namespace App\Jobs;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Nexus\Database\NexusDB;

class UpdateUserSeedingLeechingTime implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private int $beginUid;

    private int $endUid;

    private string $requestId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $beginUid, int $endUid, string $requestId = '')
    {
        $this->beginUid = $beginUid;
        $this->endUid = $endUid;
        $this->requestId = $requestId;
    }

    /**
     * Determine the time at which the job should timeout.
     *
     * @return \DateTime
     */
    public function retryUntil()
    {
        return now()->addSeconds(Setting::get('main.autoclean_interval_four'));
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $beginTimestamp = time();
        $logPrefix = sprintf("[CLEANUP_CLI_UPDATE_SEEDING_LEECHING_TIME], commonRequestId: %s, beginUid: %s, endUid: %s", $this->requestId, $this->beginUid, $this->endUid);
        $sql = sprintf(
            "update users set seedtime = (select sum(seedtime) from snatched where userid = users.id), leechtime=(select sum(leechtime) from snatched where userid = users.id), seed_time_updated_at = '%s' where id > %s and id <= %s and status = 'confirmed' and enabled = 'yes'",
            now()->toDateTimeString(), $this->beginUid, $this->endUid
        );
        $results = NexusDB::statement($sql);
        $costTime = time() - $beginTimestamp;
        do_log("$logPrefix, [DONE], sql: $sql, results: " . var_export($results, true) . " cost time: $costTime seconds");
    }
}

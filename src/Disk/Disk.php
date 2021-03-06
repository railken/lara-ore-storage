<?php

namespace Railken\LaraOre\Storage\Disk;

use Illuminate\Database\Eloquent\Model;
use Railken\Laravel\Manager\Contracts\EntityContract;

/**
 * @property public $id
 * @property public $name
 * @property public $enabled
 * @property public $config
 * @property public $driver
 */
class Disk extends Model implements EntityContract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ore_disks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'enabled', 'config', 'driver'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'config' => 'array',
    ];

    public function getConfigName()
    {
        return 'disk-'.$this->id;
    }

    public function getStorage()
    {
        return \Illuminate\Support\Facades\Storage::disk($this->getConfigName());
    }

    public function reloadConfig()
    {
        if ($this->config) {
            $base = 'filesystems.disks';
            $name = $this->getConfigName();

            config([$base.'.'.$name.'.driver' => $this->driver]);

            foreach ($this->config as $key => $value) {
                config([$base.'.'.$name.'.'.$key => $value]);
            }
        }
    }
}

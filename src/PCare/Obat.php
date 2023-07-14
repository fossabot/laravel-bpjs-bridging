<?php

namespace AamDsam\Bpjs\PCare;

class Obat extends PcareService
{
    /**
     * @var string
     */
    protected $feature = 'obat';

    public function dpho($keyword)
    {
        $this->feature .= "/dpho/{$keyword}";

        return $this;
    }

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";

        return $this;
    }
}

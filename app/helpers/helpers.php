<?php

function formatRupiah($nilai)
{
    return 'Rp ' . number_format($nilai, 0, ',', '.');
}

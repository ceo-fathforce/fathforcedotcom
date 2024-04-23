<?php

namespace App\Imports\Master;

use App\Concerns\ItemImport;
use App\Models\Master\Socialmedia;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SocialmediaImport implements ToCollection, WithHeadingRow
{
    use ItemImport;

    protected $limit = 10;

    public function collection(Collection $rows)
    {
        if (count($rows) > $this->limit) {
            throw ValidationException::withMessages(['message' => trans('general.errors.max_import_limit_crossed', ['attribute' => $this->limit])]);
        }

        $logFile = $this->getLogFile('socialmedia');

        $errors = $this->validate($rows);

        $this->checkForErrors('socialmedia', $errors);

        if (! request()->boolean('validate') && ! \Storage::exists($logFile)) {
            $this->import($rows);
        }
    }

    private function import(Collection $rows)
    {
        activity()->disableLogging();

        foreach ($rows as $row) {
            $socialmedia = Socialmedia::forceCreate([
                'facebook' => Arr::get($row, 'facebook'),
                'instagram' => Arr::get($row, 'instagram'),
                'youtube' => Arr::get($row, 'youtube'),
                'twitter' => Arr::get($row, 'twitter'),
                'telegram' => Arr::get($row, 'telegram'),
            ]);
        }

        activity()->enableLogging();
    }

    private function validate(Collection $rows)
    {
        $errors = [];
        foreach ($rows as $index => $row) {
            $rowNo = $index + 2;

            $facebook = Arr::get($row, 'facebook');
            $instagram = Arr::get($row, 'instagram');
            $youtube = Arr::get($row, 'youtube');
            $twitter = Arr::get($row, 'twitter');
            $telegram = Arr::get($row, 'telegram');

            if (! $facebook) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.facebook'), 'required');
            } elseif (strlen($facebook) < 2 || strlen($facebook) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.facebook'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $instagram) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.instagram'), 'required');
            } elseif (strlen($instagram) < 2 || strlen($instagram) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.instagram'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $youtube) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.youtube'), 'required');
            } elseif (strlen($youtube) < 2 || strlen($youtube) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.youtube'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $twitter) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.twitter'), 'required');
            } elseif (strlen($twitter) < 2 || strlen($twitter) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.twitter'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $telegram) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.telegram'), 'required');
            } elseif (strlen($telegram) < 2 || strlen($telegram) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.socialmedia.props.telegram'), 'min_max', ['min' => 2, 'max' => 500]);
            }
        }

        return $errors;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Vidhi
 * Date: 29-04-2018
 * Time: 13:09
 */
class DiscoverShow
{
    public function decodeJSONByID($id)
    {
        $url = "http://api.tvmaze.com/shows/" . $id;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{}",
        ));
        $data = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $this->char = json_decode($data);
    }

    public function getInfoFromName($detail)
    {
        if ($detail == "rating") {
            return round(($this->char->rating->average) / 2);
        } else if ($detail == "original") {
            return $this->char->image->medium;
        } else if ($detail == "genres") {
            $temp = "";
            for ($i = 0; $i < count($this->char->genres); $i++)
                $temp = $temp . $this->char->genres[$i] . "&nbsp &#124 &nbsp";
            return $temp;
        } else if ($detail == "status") {
            return $this->char->status;
        } else if ($detail == "name") {
            return $this->char->name;
        } else if ($detail == "premiered") {
            return $this->char->premiered;
        } else if ($detail == "network") {
            return $this->char->network->country->code . " &nbsp; &#8259 &nbsp;" . $this->char->network->name;
        } else if ($detail == "schedule") {
            $temp = $this->char->schedule->time;
            for ($i = 0; $i < count($this->char->schedule->days); $i++) {
                $temp = $temp . "&nbsp on &nbsp " . $this->char->schedule->days[$i] . "&nbsp";
            }
            return $temp;
        }
        return strip_tags($this->char->$detail);
    }
    public function decodeJSONForCast($id)
    {
        $url = "http://api.tvmaze.com/shows/" . $id . "?embed=cast";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{}",
        ));
        $data = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $this->char = json_decode($data);
    }
    public function getInfoCast($detail,$id)
    {
        if ($detail == "cast") {
            return count($this->char->_embedded->cast);
        }
        else if($detail=="image"){
                return ($this->char->_embedded->cast[$id]->person->image->medium);
        }
        else if($detail=="name"){
            return ($this->char->_embedded->cast[$id]->person->name);
        }
        else if($detail=="character"){
            return ($this->char->_embedded->cast[$id]->character->name);
        }
        return strip_tags($this->char->$detail);
    }
}




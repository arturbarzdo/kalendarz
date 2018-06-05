<?php


class Data_for_days {
    
    public $day_event;
    
    public function setDays($data){
        $date = '';
        
        foreach($data as $day){
            foreach($day as $day){
                
            if($date != $day['data']){
            $this->day_event[$day['data']] = '<p>'.$day['fname'].' '.$day['lname'].' '
                    .$day['godzina_r'].' - ' .$day['godzina_z'].'</p>';
            
            
            }
            else if($date == $day['data']){
            $this->day_event[$day['data']] .= '<p>'.$day['fname'].' '.$day['lname'].' '
                    .$day['godzina_r'].' - ' .$day['godzina_z'].'</p>';
            
            
            }else{
                $this->day_event[$day['data']] = "";
            }
        
            $date = $day['data'];
            }
        }
      return $this->day_event;  
    }
}

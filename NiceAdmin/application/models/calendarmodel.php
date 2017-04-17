<?php

class CalendarModel extends CI_Model{
    
    var $cal_array;
    
    function getCalenderData($year,$month){
        
         $this->db->select('cal_date','data');
         $this->db->from('calender');
         $this->db->like('cal_date',"$year-$month",'after');
         $query_cal = $this->db->get();
         $calender_details = array();
         foreach($query_cal->result() as $calender_row){
             $calender_details[substr($calender_row->cal_date,8,2)] = $calender_row->data;
         }
        return $calender_details;
        
    }
    
    function add_calender_data($date,$data){
        
        if($this->db->select('cal_date')->from('calender')->where('cal_date',$date)->count_all_results()){
            $this->db->where('cal_date',$date)->update('calender',
                array(
                    'cal_date'=>$date,
                    'data'=>$data
                )
            );
            
        }else{
            $this->db->insert('calender',
                array(
                    'cal_date'=>$date,
                    'data'=>$data
                )
            );
            
        }
        
       
        
        
    }
    
    
    function calender_genarate($year,$month){
        
        
        $this->cal_array = array(
            'start_day'=>'monday',
            'show_next_prev'=>true,
            'next_prev_url'=>  base_url().'index1/display_calender'
        );
        
        
        $this->cal_array['template'] = '{table_open}<table class="calendertable" cellpadding="1" cellspacing="2">{/table_open}

            {heading_row_start}<tr>{/heading_row_start}

            {heading_previous_cell}<th class="prev_sign calth"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
            {heading_title_cell}<th class="calth" colspan="{colspan}">{heading}</th>{/heading_title_cell}
            {heading_next_cell}<th class="next_sign calth"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

            {heading_row_end}</tr>{/heading_row_end}

            //Deciding where to week row start
            {week_row_start}<tr class="week_name" >{/week_row_start}
            //Deciding  week day cell and  week days
            {week_day_cell}<td class="cal">{week_day}</td>{/week_day_cell}
            //week row end
            {week_row_end}</tr>{/week_row_end}

            {cal_row_start}<tr>{/cal_row_start}
            {cal_cell_start}<td class="cal">{/cal_cell_start}

            {cal_cell_content}
                <div class="daynumber">{day}</div>
                <div >{content}</div>day_num
            {/cal_cell_content}
            {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

            {cal_cell_no_content}{day}{/cal_cell_no_content}
            {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

            {cal_cell_blank}&nbsp;{/cal_cell_blank}

            {cal_cell_end}</td>{/cal_cell_end}
            {cal_row_end}</tr>{/cal_row_end}

            {table_close}</table>{/table_close}
            ';
        
        $cal_data = $this->getCalenderData($year, $month);       
        $this->load->library('calendar',$this->cal_array);
        $this->add_calender_data('2017-04-13','one');
        return  $this->calendar->generate($year,$month,$cal_data);
        
    }    
}
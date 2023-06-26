<?php

namespace App\Services\Backend;

use Illuminate\Http\Request;

class Invoice
{
    public function rows(Int $per_page)
    {

        $rows = \Facades\App\Models\Invoice::paginate($per_page);

        return $rows;

    }

    public function get(Int $id)
    {

        $row = \Facades\App\Models\Invoice::find($id);

        if (empty($row->id)) return redirect()->route('admin.order')->with('warning','Data not found!');

        return $row;

    }


    public function create(Request $request)
    {
        
        
    }
    public function update(Int $id,Request $request)
    {
        $invoice=\Facades\App\Models\Invoice::find($id);
        $invoice->status=$request->status;

        $gross_total=0;
        foreach($request->items as $index=>$item){
            $invoiceItem=\Facades\App\Models\InvoiceItem::find($item);
            $invoiceItem->quantity=$request->quantity[$index];
            $invoiceItem->total=$invoiceItem->quantity*$invoiceItem->price;
            $gross_total=$gross_total+$invoiceItem->total;
            $invoiceItem->update();
        }

        $tax_total=0;
        foreach($invoice->invoiceTaxes as $tax){
            $tax->amount=($gross_total/100)*$tax->rate;
            $tax_total+=$tax->amount;
            $tax->update();
        }

        $invoice->gross_total=$gross_total;
        $invoice->tax_total=$tax_total;
        $invoice->grand_total=$gross_total+$tax_total+$invoice->shipping_total;

        if(!empty($invoice)){
            $invoice->update();
            return true;
        }
        return false;
        

    }
    
    public function delete($request)
    {
        
    }
    
    public function numberToWord($num = '')
    {
        $num    = ( string ) ( ( int ) $num );
        
        if( ( int ) ( $num ) && ctype_digit( $num ) )
        {
            $words  = array( );
             
            $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
             
            $list1  = array('','one','two','three','four','five','six','seven',
                'eight','nine','ten','eleven','twelve','thirteen','fourteen',
                'fifteen','sixteen','seventeen','eighteen','nineteen');
             
            $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
                'seventy','eighty','ninety','hundred');
             
            $list3  = array('','thousand','million','billion','trillion',
                'quadrillion','quintillion','sextillion','septillion',
                'octillion','nonillion','decillion','undecillion',
                'duodecillion','tredecillion','quattuordecillion',
                'quindecillion','sexdecillion','septendecillion',
                'octodecillion','novemdecillion','vigintillion');
             
            $num_length = strlen( $num );
            $levels = ( int ) ( ( $num_length + 2 ) / 3 );
            $max_length = $levels * 3;
            $num    = substr( '00'.$num , -$max_length );
            $num_levels = str_split( $num , 3 );
             
            foreach( $num_levels as $num_part )
            {
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';
                 
                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
            {
                $commas = $commas - 1;
            }
             
            $words  = implode( ', ' , $words );
             
            $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
            if( $commas )
            {
                $words  = str_replace( ',' , ' and' , $words );
            }
             
            return $words;
        }
        else if( ! ( ( int ) $num ) )
        {
            return 'Zero';
        }
        return '';
    }
}
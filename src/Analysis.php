<?php 
namespace ronylee\phpanalysis;

class Analysis
{
	/**
	 * 实现分词功能
	 */
	public function run($content)
	{
		PhpAnalysis::$loadInit = false;
		$pa = new PhpAnalysis('utf-8', 'utf-8', false);
        $pa::$loadInit = false;
		$pa->LoadDict();
		$pa->SetSource($content);
		$pa->StartAnalysis( false );
        $tags = $pa->GetFinallyResult();
		return $tags;
	}
}




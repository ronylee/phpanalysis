<?php 
namespace ronylee\phpanalysis;

class Analysis
{

    /**
     * @var object 对象实例
     */
    protected static $instance;

    /**
     * 实例化
     *
     * @return void
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

	/**
	 * 实现分词功能
	 */
	public function run($content)
	{
		PhpAnalysis::$loadInit = false;
		$pa = PhpAnalysis::instance('utf-8', 'utf-8', false);
        $pa::$loadInit = false;
		$pa->LoadDict();
		$pa->SetSource($content);
		$pa->StartAnalysis( false );
        $tags = $pa->GetFinallyResult();
		return $tags;
	}
}




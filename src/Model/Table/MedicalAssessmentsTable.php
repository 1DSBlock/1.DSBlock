<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MedicalAssessmentsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        // $this->belongTo('Users');
        
    }

    const initFamilyHistory = [
    	'anemia' => ['name' => 'Anemia (Thiếu máu, thiếu chất)'],
    	'asthma' => ['name' => 'Asthma (Hen suyễn)'],
    	'epilepsy' => ['name' => 'Epilepsy (Bệnh động kinh)'],
    	'hepatitis' => ['name' => 'Hepatitis (Viêm gan siêu vi)' , 'extension' => ['type' => 'Type (Loại)']],
    	'osteoporosis' => ['name' => 'Osteoporosis (Loãng xương)'],
    	'alcoholism' => ['name' => 'Alcoholism (Nghiện rượu)'],
    	'parkinsons_disease'  => ['name' => 'Parkinsons disease (Bệnh Parkinson)'],
    	'glaucoma' => ['name' => 'Glaucoma (Bệnh mắt)'],
    	'hypertension' => ['name' => 'Hypertension (Cao huyết áp)'],
    	'stroke' => ['name' => 'Stroke (Đột quỵ)' , 'extension' => ['when' => 'When (Lúc nào)']],
    	'alzheimers_disease' => ['name' => 'Alzheimers diease (Bệnh đãng trí)'],
    	'cancer' => ['name' => 'Cancer (Ung thư)'],
    	'hay_fever' => ['name' => 'Hay fever (Dị ứng thời tiết)'],
    	'lipid_disorder' => ['name' => 'Lipid disorder (Rối loạn chuyển hóa)'],
    	'thyroid_diseases' => ['name' => 'Thyroid diseases (Bệnh tuyến giáp)'],
    	'arthritis' => ['name' => 'Arthritis (Viêm khớp)'],
    	'diabetes' => ['name' => 'Diabetes (Tiểu đường)', 'extension' => ['type' => 'Type (Loại)']],
    	'heart_diseases' => ['name' => 'Heart diseases (Bệnh tim)'],
    	'mental_diseases' => ['name' => 'Mental diseases (Bệnh tâm thần)'],	
    	'others' => ['name' => 'Others (Bệnh khác)']
    ];
    const initPastMedicalHistory = [        
        'cancer' => ['name' => 'Cancer (Ung thư)'],
        'hypertension' => ['name' => 'Hypertension (Huyết áp cao)'],
        'hypotension' => ['name' => 'Hypotension (Huyết áp thấp)'],
        'lung_disease_asthma' => ['name' => 'Lung disease/Asthma (Bệnh phổi/Hen suyễn)'], 
        'kidney_disease' => ['name' => 'Kidney disease (Bệnh gan)'],
        'hyperthyroidism' => ['name' => 'Hyperthyroidism (Tăng năng tuyến giáp)'],
        'hypothyroidism' => ['name' => 'Hyperthyroidism (Giảm năng tuyến giáp)'],
        'hair_loss' => ['name' => 'Hair loss (Rụng tóc)'],
        'allergies' => ['name' => 'Allergies (Dị ứng)'],
        'arthritis' => ['name' => 'Arthritis (Viêm khớp)'],
        'ovarian_cysts' => ['name' => 'Ovarian Cysts (U nang buồng trứng)'],
        'high_cholesterol' => ['name' => 'High cholesterol (Cholesterol cao)'],   
        'headaches' => ['name' => 'Headaches (Đau đầu)'],
        'mental_diseases' => ['name' => 'Mental diseases (Bệnh tâm thần)'],
        'heart_diseases' => ['name' => 'Heart diseases (Bệnh tim)']
    ];

    const initUrinologicalHistoryMale = [        
        'frequent_urination' => ['name' => 'Frequent urination (Thường xuyên đi tiểu)'],
        'urination_at_night' => ['name' => 'Urination at night (Đi tiểu vào ban đêm)'],
        'urination_incontinence' => ['name' => 'Urination incontinence (Đi tiểu không kiểm soát được)'],
        'sexual_desire' => ['name' => 'Sexual desire (Ham muốn tình dục)', 'extension' => ['note' => 'Note (Ghi chú)']],
        'pain_during_sexual_intercourse' => ['name' => 'Pain during sexual intercourse (Bị đau trong lúc giao hợp)'],
        'erectile_problems_for_male' => ['name' => 'Erectile problems, for male (Chứng cương dương đô)'],
        'prostate_problems_please_specify' => ['name' => 'Prostate problems please specify (Vấn đề về tuyến tiền liệt)', 'extension' => ['note' => 'Note (Ghi rõ)']]        
    ];
    const initUrinologicalHistoryFemale = [        
        'difficulty_getting_pregnant' => ['name' => 'Difficulty getting pregnant (Khó khăn trong việc có thai)'],
        'infertility_treatment' => ['name' => 'Infertility treatment (Điều trị vô sinh)'],
        'oral_contraception' => ['name' => 'Oral contraception (Sử dụng thuốc tránh thai)'],
        'frequent_urination' => ['name' => 'Frequent urination (Thường xuyên đi tiểu)'],
        'urination_at_night' => ['name' => 'Urination at night (Đi tiểu vào ban đêm)'],
        'urination_incontinence' => ['name' => 'Urination incontinence (Đi tiểu không kiểm soát được)'],
        'sexual_desire' => ['name' => 'Sexual desire (Ham muốn tình dục)', 'extension' => ['note' => 'Note (Ghi chú)']],
        'pain_during_sexual_intercourse' => ['name' => 'Pain during sexual intercourse (Bị đau trong lúc giao hợp)'],
        

    ]; 

    const initSleep = [        
        'average_hours_of_sleep' => ['name' => 'Average hours of sleep (Giờ ngủ trung bình)', 'extension' => ['hours' => 'Hours/night (giờ/đêm)']],
        'trouble_falling_asleep' => ['name' => 'Trouble falling asleep (Khó ngủ)'],
        'waking_up_during_the_night' => ['name' => 'Waking up during the night (Thức giấc vào ban đêm)'],
        'used_sleeping_aid' => ['name' => 'Used sleeping_aid (Sử dụng thuốc bổ trợ giấc ngủ)', 'extension' => ['specify' => 'Please specify (Ghi rõ)']],
        'nervous_anxious_restless_sleep' => ['name' => 'Nervous/Anxious/Restless sleep (Lo lắng, bồn chồn)'],
        'snoring' => ['name' => 'Snoring (Ngáy)'],
        'teeth_grinding' => ['name' => 'Teeth grinding (Nghiến răng)'],
        'wake_up_rested' => ['name' => 'Wake up rested (Thư thái khi ngủ dậy)']
    ];

    const initKnowAllergies = [        
        'drug_allergies' => ['name' => 'Grug allergies(Dị ứng thuốc)', 'extension' => ['specify' => 'Please specify agent(Ghi rõ)']],
        'food_intolerance' => ['name' => 'Food intolerance(Dị ứng thứ căn)', 'extension' => ['specify' => 'Please specify agent(Ghi rõ)']],
        'others' => ['name' => 'Others(khác)', 'extension' => ['specify' => 'Please specify(Ghi rõ)']]
    ]; 

    const initGastroIntestinalProblems = [        
        'constipation' => ['name' => 'Constipation (Táo bón)'],
        'stomach_ulcers_hyperacidity' => ['name' => 'Stomach Ulcers/Hyperacidity (Loét dạ dày)'],
        'bloating' => ['name' => 'Bloadting (Phồng dộp dạ dày)'],
        'others' => ['name' => 'Others(khác)', 'extension' => ['specify' => 'Please specify(Ghi rõ)']]
    ];

    const initLocomotorSystemProblems = [        
        'back_pain' => ['name' => 'Back pain (Đau lưng)'],
        'joint_pain' => ['name' => 'Joint pain (Đau khớp)'],
        'arthritis' => ['name' => 'Arthritis (Viêm khớp)'],
        'gout' => ['name' => 'Gout (Bệnh gút)'],
        'gait_problems_incoordination' => ['name' => 'Gait problems /Incoordination (Có vấn đề về dáng đi/Mất cân đối)'],
        'osteoporosis' => ['name' => 'Osteoporosis (Loãng xương)'],
        'others' => ['name' => 'Others(khác)', 'extension' => ['specify' => 'Please specify(Ghi rõ)']]
    ]; 

    const initRegularExercise = [        
        'times_week' => ['name' => 'times/week (lần/tuần)'],
        'howlong_session' => ['name' => 'how long/Session (Bau lâu/buổi)'],
        'easy_fatigability_tiredness' => ['name' => 'Easy fatigability/tiredness (Dễ bị kiệt sức/mệt)'],
    ];

    const initEmotionalWellBeing = [        
        'anxiety' => ['name' => 'Cancer (Ung)', 'extension' => ['rate' => 'Please rate(Đánh giá)']],
        'aggressiveness' => ['name' => 'Aggressiveness (Hay gây sự)', 'extension' => ['rate' => 'Please rate(Đánh giá)']],
        'depression' => ['name' => 'Depression (Trầm cảm)', 'extension' => ['rate' => 'Please rate(Đánh giá)']],
        'mood_swings' => ['name' => 'Mood swings (Tâm trạng thay đổi đột ngột)', 'extension' => ['rate' => 'Please rate(Đánh giá)']],
        'concentration' => ['name' => 'Concentration (Độ tập trung)', 'extension' => ['rate' => 'Please rate(Đánh giá)']],
        'self_confidence' => ['name' => 'Self confidence (Tự tin)', 'extension' => ['rate' => 'Please rate(Đánh giá)']],
        'stress' => ['name' => 'Stress (Căng thẳng)', 'extension' => ['rate' => 'Please rate(Đánh giá)']]       
    ];
}

# Cas d'application - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* **Cas d'application**

## Cas d'application

Le **recours au dossier de grossesse** dépend de la méthode de travail des fournisseurs de prestations impliqués. Des exemples possibles d'utilisation de ce format d’échange sont décrits en détail dans le [concept](https://www.e-health-suisse.ch/upload/documents/eDossiergrossesse_Concept_fr.pdf), notamment :

* Prévention ([Cas d'application 3 : Grossesse gémellaire](#cas-dapplication-3--grossesse-gémellaire))
* Transferts ([Cas d'application 1 : Prééclampsie](#cas-dapplication-1--prééclampsie))
* Accouchement et suivi post-partum
* Urgences ([Cas d'application 2 : Forte activité contractile](#cas-dapplication-2--forte-activité-contractile))
* Grossesses futures

Les **cas d'application** suivants servent à illustrer les scénarios possibles dans le cadre des possibilités d'utilisation du dossier de grossesse mentionnées ci-dessus.

### Cas d'application 1 : Prééclampsie

 La patiente [Katrin Kinderlieb](Patient-UC1-KatrinKinderlieb.md) (née le 18.01.1986) est enceinte de son premier enfant. Lors de l’[examen de routine du 05.02.2025](Encounter-UC1-EncounterMother20250205.md) dans la [37e semaine de grossesse](Observation-UC1-GestationalAgeInDays-20250205.md), la gynécologue Mme [Petra Sectionata](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md) constate une tension artérielle fortement élevée ([160/100 mmHg](Observation-UC1-BloodPressure-20250205.md)). À la question de savoir si Mme Kinderlieb présente d'autres symptômes, elle mentionne des maux de tête, des vertiges ainsi qu’une sensation occasionnelle de pression dans la partie supérieure haut de l’abdomen.
 Après avoir consulté le carnet de suivi du diabète gestationnel ainsi que les résultats des dernières analyses d’urine, montrant des valeurs d’acide urique en constante augmentation (> 6 mg/dl), Mme Sectionata prescrit des analyses de laboratoire supplémentaires. En raison des résultats préoccupants, Mme Sectionata envoie la patiente à l’hôpital 'Kids & Mütter' et inscrit les nouvelles valeurs dans le dossier de grossesse. 

 Grâce au [**dossier de grossesse**](Bundle-UC1-Document.md) contenant les informations les plus récentes sur les paramètres rénaux ([créatinine : 1.2 mg/dl](Observation-UC1-Creatinine-20250205.md), [acide urique : 6.3 mg/dl](Observation-UC1-Urate-20250205.md), [DFG : 54 ml/min](Observation-UC1-GFR-20250205.md)), les valeurs hépatiques ([GGT : 43 U/l](Observation-UC1-GGT-20250205.md), [GOT/AST/ASAT : 43 U/l](Observation-UC1-AST-20250205.md), [ALAT : 98 U/l](Observation-UC1-ALAT-20250205.md), [phosphatase alcaline : 109 U/l](Observation-UC1-AP-20250205.md)), la glycémie ([glucose : 8.1 mmol/l](Observation-UC1-GlucoseLab-20250205.md)) et la tension artérielle, les médecins peuvent évaluer avec précision la gravité de la prééclampsie. Grâce aux informations sur la position actuelle du fœtus ([position céphalique](Observation-UC1-FetalPosition-20250205.md)), le nombre de plaquettes ([thrombocytes : 130](Observation-UC1-Platelets-20250205.md)) et l’hématocrite ([hématocrite : 46 %](Observation-UC1-Hematocrit-20250205.md)), il est possible, en cas de déclenchement de l’accouchement, de décider précocement si une césarienne est nécessaire. 

Fig. : Dossier de grossesse Katrin Kinderlieb, 05.02.2025

### Cas d'application 2 : Forte activité contractile

 La patiente [Fabienne Babyglück](Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.md) (née le 10.05.1999) est admise à la clinique obstétrique 'Bienvenue au monde' en [32e semaine de grossesse](Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.md) avec de fortes contractions et dans un état semi-inconscient. La gynécologue [Tanja Allesgut](PractitionerRole-89029102-999c-4b69-a836-e4dbfbd55527.md) et la sage-femme [Ruth Ohazwei](PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.md) accueillent la patiente. Dans le de grossesse, elles trouvent la [position en siège du bébé](Observation-4a907770-6665-4fb4-b186-afd0ddf48742.md) documentée ainsi qu’une note concernant un diabète gestationnel nécessitant de l’insuline avec une [glycémie capillaire de 4,7 mmol/l](Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.md) lors de la [consultation de suivi du 26.03.2025](Encounter-8e89c502-964f-4234-9728-540d881b0380.md). 

 Le jour même de l’admission, lors de l’[examen d’entrée du 27.03.2025](Encounter-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f.md), une [glycémie capillaire abaissée de 3,9 mmol/l](Observation-4b9ca365-383e-41c8-9bac-b3c79aea1c7e.md) est mesurée ; celle-ci est confirmée en laboratoire par une [mesure veineuse](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md). En raison des symptômes associés et de l’évolution rapide du travail ([col dilaté à 5 cm](Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.md), [mouvements fœtaux faibles](Observation-3e120206-7aa2-4ced-82c3-3704868e023f.md), [rythme cardiaque fœtal à 110/min](Observation-d0b53779-fde0-4780-9ff4-9ba2a4cf9393.md)), du glucose est immédiatement administré à la patiente et une césarienne d’urgence est préparée. Par la suite, les valeurs relevées sont consignées dans le [**dossier de grossesse**](Bundle-UC2-Document.md). 

Fig. : Dossier de grossesse Fabienne Babyglück, 27.03.2025

### Cas d'application 3 : Grossesse gémellaire

 La patiente [Sophie Doppelherz](Patient-UC3-SophieDoppelherz.md) (née le 22.07.1992) attend ses deux premiers enfants – une grossesse gémellaire. Lors du premier [examen prénatal du 10.02.2025](Encounter-UC3-EncounterMother20250210.md) en [7e semaine de grossesse](Observation-UC3-GestationalAgeInDays-20250210.md), la gynécologue [Claudia Frühblick](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md) constate des valeurs circulatoires stables et un état général sans particularité. 

 Madame Doppelherz rapporte qu'elle se sent bien et n'a aucune symtôme. La [tension artérielle est de 120/75 mmHg](Observation-UC3-BloodPressure-20250210.md), l'[examen urinaire est sans particularité](Observation-UC3-UrineFinding-20250210.md) (pas de protéines, pas de sucre, pas de nitrites), le [poids est de 64 kg](Observation-UC3-BodyWeight-20250210.md). L'échographie montre une grossesse gémellaire avec deux fœtus ([enfant A](Patient-UC3-ChildA.md), [enfant B](Patient-UC3-ChildB.md)) développés de manière adaptée à l'âge gestationnel dans une quantité de liquide amniotique normale. Les deux activités cardiaques sont d'environ 155 battements par minute ([enfant A](Observation-UC3-FetalHeartFeatureChildA-20250210.md), [enfant B](Observation-UC3-FetalHeartFeatureChildB-20250210.md)). Toutes ces valeurs sont documentées dans le [**dossier de grossesse**](Bundle-UC3-Document.md). Comme tous les résultats sont sans particularité, le Dr Frühblick recommande le [prochain examen de routine dans quatre semaines](Appointment-UC3-Appointment20250310.md). 

Fig. : Dossier de grossesse Sophie Doppelherz, 10.02.2025


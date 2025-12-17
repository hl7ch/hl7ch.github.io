# Use Cases - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* **Use Cases**

## Use Cases

### Order for diagnostic imaging

Players:

* Order placed by: [Dr O. Rderplacer](Practitioner-PractORderplacer.md), general practitioner at the [group practice ‘Happy Doctors’](Organization-OrgHappyDoctors.md).
* Recipient of the order: [Dr O. Rderfiller](Practitioner-PractORderfiller.md), radiologist at the [radiology department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md)
* Patient: [Mrs S. Ufferer](Patient-PatSUfferer.md), who requires a radiological examination

The patient [Mrs S. Ufferer](Patient-PatSUfferer.md) has an appointment with [Dr O. Rderplacer](Practitioner-PractORderplacer.md) at the [group practice ‘Happy Doctors’](Organization-OrgHappyDoctors.md): [Dr O. Rderplacer](Practitioner-PractORderplacer.md) agrees with the patient that a chest X-ray will be done in the [Radiology Department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md). [Dr O. Rderplacer](Practitioner-PractORderplacer.md) writes an X-ray order containing all the necessary information and sends it to [Dr O. Rderfiller](Practitioner-PractORderfiller.md). For comparison, [Dr O. Rderplacer](Practitioner-PractORderplacer.md) encloses images and reports from earlier. She also asks for a copy of the report to be sent to the patient.

Associated [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md)

### Order for a radiological examination with intervention

Players:

* Order placed by: [Dr O. Rderplacer](Practitioner-PractORderplacer.md), general practitioner at the [group practice ‘Happy Doctors’](Organization-OrgHappyDoctors.md).
* Recipient of the order: [Dr O. Rderfiller](Practitioner-PractORderfiller.md), radiologist at the [radiology department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md)
* Patient: [Mrs S. Ufferer](Patient-PatSUfferer.md), who requires radiological intervention

The patient [Mrs S. Ufferer](Patient-PatSUfferer.md) has pain in the buttock, thigh and calf muscles after walking approx. 100 m, and her toes are also discoloured blue. [Dr O. Rderplacer](Practitioner-PractORderplacer.md) suggests an angiography for the patient, if necessary with subsequent balloon dilatation (PTA), and registers her with [Dr O. Rderfiller](Practitioner-PractORderfiller.md) for this.

Associated [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md)

### Obtaining a second opinion

Players:

* Order placed by: [Dr O. Rderplacer](Practitioner-PractORderplacer.md), general practitioner at the [group practice ‘Happy Doctors’](Organization-OrgHappyDoctors.md)
* Recipient of the order: [Prof K. Nowit-All](Practitioner-PractKNowit-All.md), Chief Physician of the [Radiology Department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md)
* Patient: [Mrs S. Ufferer](Patient-PatSUfferer.md), whose femoral neck fracture is being treated conservatively after a fall

According to the radiological report, the impression fracture appears to be stable. Therefore, and in view of the patient's age, surgery was not performed. However, [Dr O. Rderplacer](Practitioner-PractORderplacer.md) is not sure whether this decision was correct and sends the images and report to [Prof K. Nowit-All](Practitioner-PractKNowit-All.md) for a second opinion.

Associated [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)

*The second opinion described above must be distinguished from the real-time remote diagnosis and case presentation offered by various teleradiology solutions. However, the latter require a technical infrastructure that goes beyond what is discussed here.***

### Order for external reporting

Players:

* Order placed by assistant physician: [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) at [Small Hospital](Organization-OrgSmallHospital.md).
* Recipient of the order: [Dr O. Rderfiller](Practitioner-PractORderfiller.md), radiologist at the [Radiology Department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md)
* Patient: [Mrs S. Ufferer](Patient-PatSUfferer.md), who is visiting her niece. She suddenly has a fever, chills and a cough.

[Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) is on emergency duty. She orders a chest X-ray. The [Small Hospital](Organization-OrgSmallHospital.md) does have an X-ray machine, but a radiologist only visits on Tuesdays and Thursdays; on the other days of the week the images are examined by the radiologists at the Happy Hospital. [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) therefore sends the images to [Dr O. Rderfiller](Practitioner-PractORderfiller.md) for reporting.

Associated [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md)

*The external reporting described above must be distinguished from the real-time remote reporting and case presentation offered by various teleradiology solutions. The latter, however, require a technical infrastructure that goes beyond what is discussed here.***

### Request for results from earlier

Players:

* Order placed by assistant physician: [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md), in the hospital [Hospital ‘Small Hospital’](Organization-OrgSmallHospital.md).
* Recipient of the order: [Dr O. Rderfiller](Practitioner-PractORderfiller.md), radiologist at the [Radiology Department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md)
* Patient: [Mrs S. Ufferer](Patient-PatSUfferer.md), who had a radiological examination a year ago (on the orders of her former GP)

[Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) asks the patient [Mrs S. Ufferer](Patient-PatSUfferer.md) whether she has ever had a chest X-ray. She says that she was x-rayed a year ago in the [radiology department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md). [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) writes a request for the results of this examination and sends it to [Dr O. Rderfiller](Practitioner-PractORderfiller.md), radiologist at the [Radiology Department ‘Happy Hospital’](Organization-OrgRadHappyHospital.md). She also asks for a copy of the report to be sent to the patient.

Associated [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRequestPrevious.md)


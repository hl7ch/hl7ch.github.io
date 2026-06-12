# Profiles - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Profiles**

## Profiles

### Resource Profiles

* [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md) 
Reference to advance directives and emergency medical 

* [CH Emergency Record Body Structure](StructureDefinition-ch-emr-bodystructure.md) 
Structured anatomical location of an implant in the Emergency Record. Carries an unlateralised body site in `location` and the laterality (or other directional qualifier) in `locationQualifier`. 

* [CH Emergency Record Bundle](StructureDefinition-ch-emr-bundle.md) 
Bundle profile for Emergency Record. 

* [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md) 
Swiss Emergency Record based on International Patient Summary 

* [CH Emergency Record Device](StructureDefinition-ch-emr-device.md) 
Device profile for implants in the Emergency Record. 

* [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md) 
Use of an implanted device in the Emergency Record. The `bodySite` CodeableConcept may carry the ChEmrBodyStructureReference extension to link to a `ChEmrBodyStructure` for structured anatomy + laterality. 

* [CH Emergency Record DocumentReference](StructureDefinition-ch-emr-documentreference.md) 
DocumentReference profile for information on documents in the Emergency Record. 

* [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md) 
Medication Statement for the Swiss Emergency Record. Captures a medication the patient is taking with a treatment reason, a dose quantity, and a dosing schedule expressed using the CH EMED dosage pattern. 

* [CH Emergency Record Observation Disability](StructureDefinition-ch-emr-observation-cognitive-disability.md) 
Observation profile for cognitive disability in the Emergency Record. 

* [CH Emergency Record Observation Resuscitation Status](StructureDefinition-ch-emr-observation-resuscitation-status.md) 
Observation profile for documenting the patient's resuscitation (code) status. 

* [CH Emergency Record Physical Disability Observation](StructureDefinition-ch-emr-observation-physical-disability.md) 
Observation profile for physical disability in the Emergency Record. 

* [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md) 
RelatedPerson profile for emergency contacts and family members in the Emergency Record. 

* [CH Emergency Record Risk to Healthcare Personnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md) 
Risk to healthcare personnel emanating from the patient — typically a communicable / infectious-disease condition or another patient-side circumstance that healthcare personnel need to be aware of for their own safety when treating the patient in an emergency context. 


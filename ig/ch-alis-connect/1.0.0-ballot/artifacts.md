# Artifacts Summary - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Logical Models 

These define data models that represent the domain covered by this implementation guide in more business-friendly terms than the underlying FHIR resources.

| | |
| :--- | :--- |
| [CH ALIS Data Type Boolean](StructureDefinition-Boolean.md) | Data Type Boolean |
| [CH ALIS Data Type Date](StructureDefinition-Date.md) | Data Type Date |
| [CH ALIS Data Type DateTime](StructureDefinition-DateTime.md) | Data Type DateTime |
| [CH ALIS Data Type Decimal](StructureDefinition-Decimal.md) | Data Type Decimal |
| [CH ALIS Data Type Text](StructureDefinition-Text.md) | Data Type Text |
| [CH ALIS Data Type UnsignedInt](StructureDefinition-UnsignedInt.md) | Data Type UnsignedInt |
| [CH ALIS Leistungsschnittstelle - Diagnosis](StructureDefinition-Diagnosis.md) | This logical model describes the Diagnosis of 'Leistungsschnittstelle ALIS Version 5.1'. |
| [CH ALIS Leistungsschnittstelle - ParameterV40](StructureDefinition-ParameterV40.md) | This logical model describes the ParameterV40 of 'Leistungsschnittstelle ALIS Version 5.1'. |
| [CH ALIS Leistungsschnittstelle - PersonV40](StructureDefinition-PersonV40.md) | This logical model describes the PersonV40 of 'Leistungsschnittstelle ALIS Version 5.1'. |
| [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md) | This logical model describes the Service of 'Leistungsschnittstelle ALIS Version 5.1'. |
| [CH ALIS Leistungsschnittstelle - ServiceAssignment](StructureDefinition-ServiceAssignment.md) | This logical model describes the ServiceAssignment of 'Leistungsschnittstelle ALIS Version 5.1'. |
| [CH ALIS Leistungsschnittstelle - SessionSectionB](StructureDefinition-SessionSectionB.md) | This logical model describes the Treatment of 'Leistungsschnittstelle ALIS Version 5.1'. |
| [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md) | This logical model describes the Visit of 'Leistungsschnittstelle ALIS Version 5.1'. |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md) | Base definition for the ChargeItem resource in the context of ALIS-Connect. |
| [CH ALIS Condition Profile](StructureDefinition-ch-alis-connect-condition.md) | Base definition for the Condition resource in the context of ALIS-Connect. |
| [CH ALIS Encounter Profile](StructureDefinition-ch-alis-connect-encounter.md) | Base definition for the Encounter resource in the context of ALIS-Connect. |
| [CH ALIS Patient Profile](StructureDefinition-ch-alis-connect-patient.md) | Base definition for the Patient resource in the context of ALIS-Connect. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ALIS Extension DiagnosisConfidential](StructureDefinition-ch-alis-connect-ext-diagnosisconfidential.md) | This extension describes the DiagnosisConfidential. |
| [CH ALIS Extension Form](StructureDefinition-ch-alis-connect-ext-form.md) | This extension describes the Form. |
| [CH ALIS Extension ItemNumber](StructureDefinition-ch-alis-connect-ext-itemnumber.md) | This extension describes the ItemNumber (Laufnummer). |
| [CH ALIS Extension OrderDate](StructureDefinition-ch-alis-connect-ext-orderdate.md) | This extension describes the OrderDate. |
| [CH ALIS Extension OrderID](StructureDefinition-ch-alis-connect-ext-orderid.md) | This extension describes the OrderID. |
| [CH ALIS Extension ParameterV40](StructureDefinition-ch-alis-connect-ext-parameterv40.md) | This extension describes the ParameterV40 with ParamTyp and ParamValue. |
| [CH ALIS Extension RefItemNumber](StructureDefinition-ch-alis-connect-ext-refitemnumber.md) | This extension describes the RefItemNumber (Referenz Laufnummer zu Hauptleistung). |
| [CH ALIS Extension SectionCode](StructureDefinition-ch-alis-connect-ext-sectioncode.md) | This extension describes the SectionCode. |
| [CH ALIS Extension ServiceAssignment](StructureDefinition-ch-alis-connect-ext-serviceassignment.md) | This extension describes ServiceAssignment |
| [CH ALIS Extension ServiceItemErrorCode](StructureDefinition-ch-alis-connect-ext-serviceitemerrorcode.md) | This extension describes the ServiceItemErrorCode (Fehlercode). |
| [CH ALIS Extension SessionAnnexB](StructureDefinition-ch-alis-connect-ext-sessionannexb.md) | This extension describes SessionAnnexB |
| [CH ALIS Extension SessionID](StructureDefinition-ch-alis-connect-ext-sessionid.md) | This extension describes the SessionID. |
| [CH ALIS Extension TPValue](StructureDefinition-ch-alis-connect-ext-tpvalue.md) | This extension describes the TPValue. |
| [CH ALIS Extension Termination](StructureDefinition-ch-alis-connect-ext-termination.md) | This extension describes the TerminationVisit and TerminationReason. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ALIS ParamTyp](ValueSet-ch-alis-connect-paramtyp.md) | This value set defines the ParamTyp, which are displayed via CH ALIS Extension ParameterV40. |
| [CH ALIS PersonTyp](ValueSet-ch-alis-connect-persontyp.md) | This value set defines the PersonTyp. |
| [LKAAT](ValueSet-lkaat.md) | Externally maintained ambulatory physician tariff catalogue (LKAAT) published by OAAT. Declared as not-present: its codes are referenced from this IG but not enumerated here, because the catalogue is owned and published externally. |
| [SwissMedicalSpecialities](ValueSet-SwissMedicalSpecialities.md) | ValueSet for Swiss medical specialty areas (Fachbereiche) used in ambulatory care settings. Based on the regulation document 'Reglement Fachbereiche inkl. Liste der Fachbereiche' valid from January 1, 2026. Declared as fragment: only the codes actually referenced in this IG are listed here. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ALIS ParamTyp](CodeSystem-ch-alis-connect-paramtyp.md) | This code system defines the ParamTyp. |
| [CH ALIS PersonTyp](CodeSystem-ch-alis-connect-persontyp.md) | This code system defines the PersonTyp. |
| [Leistungskatalog ambulante Arzttarife (LKAAT)](CodeSystem-LKAAT.md) | Externally maintained ambulatory physician tariff catalogue (LKAAT) published by OAAT. Declared as not-present: its codes are referenced from this IG but not enumerated here, because the catalogue is owned and published externally. |
| [Swiss Medical Specialties (Fachbereiche)](CodeSystem-swiss-medical-specialties.md) | Code system for Swiss medical specialty areas (Fachbereiche) used in ambulatory care settings. Based on the regulation document 'Reglement Fachbereiche inkl. Liste der Fachbereiche' valid from January 1, 2026. Declared as fragment: only the codes actually referenced in this IG are listed here. |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [ALIS Diagnosis to FHIR Mapping](ConceptMap-Alis2FhirDiagnosis.md) | Mapping of the ALIS Diagnosis logical model to the FHIR Condition profile. |
| [ALIS ParameterV40 to FHIR Mapping](ConceptMap-Alis2FhirParameterV40.md) | Mapping of the ALIS ParameterV40 logical model to the FHIR ParameterV40 extension (on ChargeItem). Specific ParamTyp values (BMI, Billable, Amount, SLIndicationCode) are mapped to dedicated ChargeItem elements instead of the generic ParameterV40 extension. |
| [ALIS PersonV40 to FHIR Mapping](ConceptMap-Alis2FhirPersonV40.md) | Mapping of the ALIS PersonV40 logical model to the FHIR ChargeItem.performer element. |
| [ALIS Service to FHIR Mapping](ConceptMap-Alis2FhirService.md) | Mapping of the ALIS Service logical model to the FHIR ChargeItem and Condition profiles. |
| [ALIS ServiceAssignment to FHIR Mapping](ConceptMap-Alis2FhirServiceAssignment.md) | Mapping of the ALIS ServiceAssignment logical model to the FHIR ServiceAssignment extension (on ChargeItem). |
| [ALIS SessionSectionB to FHIR Mapping](ConceptMap-Alis2FhirSessionSectionB.md) | Mapping of the ALIS SessionSectionB logical model to the FHIR SessionAnnexB extension (on ChargeItem). |
| [ALIS Visit to FHIR Mapping](ConceptMap-Alis2FhirVisit.md) | Mapping of the ALIS Visit logical model to the FHIR Encounter, Patient and ChargeItem profiles. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [ALIS 5.1 FHIR ChargeItemLKAATIcd](ChargeItem-ChargeItemLKAATIcd.md) | ChargeItemLKAATIcd |
| [ALIS 5.1 FHIR ChargeItemLKAATIcd-45679](ChargeItem-ChargeItemLKAATIcd-45679.md) | ChargeItemLKAATIcd-45679 |
| [ALIS 5.1 FHIR ChargeItemLKAATIcd-45680](ChargeItem-ChargeItemLKAATIcd-45680.md) | ChargeItemLKAATIcd-45680 |
| [ALIS 5.1 FHIR ChargeItemLKAATIcdSessionB](ChargeItem-ChargeItemLKAATIcdSessionB.md) | ChargeItemLKAATIcdSessionB |
| [ALIS 5.1 FHIR ChargeItemLKAATIcdSessionB-45679](ChargeItem-ChargeItemLKAATIcdSessionB-45679.md) | ChargeItemLKAATIcdSessionB-45679 |
| [ALIS 5.1 FHIR ChargeItemLKAATIcdSessionB-45680](ChargeItem-ChargeItemLKAATIcdSessionB-45680.md) | ChargeItemLKAATIcdSessionB-45680 |
| [ALIS 5.1 FHIR ChargeItemLabServiceAssignment](ChargeItem-ChargeItemLabServiceAssignment.md) | ChargeItemLabServiceAssignment |
| [ALIS 5.1 FHIR ChargeItemPauschaleKomplett](ChargeItem-ChargeItemPauschaleKomplett.md) | ChargeItemPauschaleKomplett |
| [ALIS 5.1 XML VisitLKAATIcd](Binary-VisitLKAATIcd.md) | VisitLKAATIcd |
| [ALIS 5.1 XML VisitLKAATIcdSessionB](Binary-VisitLKAATIcdSessionB.md) | VisitLKAATIcdSessionB |
| [ALIS 5.1 XML VisitLabServiceAssignment](Binary-VisitLabServiceAssignment.md) | VisitLabServiceAssignment |
| [ALIS 5.1 XML VisitPauschaleKomplett](Binary-VisitPauschaleKomplett.md) | VisitPauschaleKomplett |


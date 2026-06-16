# Referral - Sarcoma Tumor Board - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Referral - Sarcoma Tumor Board**

## Referral - Sarcoma Tumor Board

### Referral - Sarcoma Tumor Board

The patient [PetraMeier](Patient-PetraMeier.md) has been diagnosed with a histologically confirmed synovial sarcoma of the right knee. The [treating practitioner](PractitionerRole-HansMusterRole.md) refers the case to the tumor board for multidisciplinary review and therapy recommendations.

[Example ServiceRequest](ServiceRequest-ReferralTumorboard.md)

#### Overview

This use case demonstrates a referral to a tumor board for cancer care review. The referral includes:

* Primary diagnosis: [Synovial sarcoma of the right knee](Condition-SarcomaKnee.md)
* Supporting information: 
* [Gadolinium contrast allergy](AllergyIntolerance-AllergyGado.md)
* [CT scan of the right knee](ImagingStudy-ImagingCT.md)
* [PET scan for staging](ImagingStudy-ImagingPET.md)
 

#### Field Sources

The following table indicates the source of each field in the ServiceRequest:

| | | |
| :--- | :--- | :--- |
| `identifier[placerOrderIdentifier].value` | Generated | Unique referral order number (e.g., REF-2025-002) |
| `status` | Hard-coded | Fixed value`active` |
| `intent` | Hard-coded | Fixed value`order` |
| `category` | [VS CH UMZH Connect ServiceRequest Category](ValueSet-ch-umzh-connect-servicerequest-category.md) | SNOMED CT code 720006006 "Cancer care review (procedure)". This code matches[`HealthcareService.type`](HealthcareService-HealthcareServiceTumorboardFulfiller.md)in the registry. |
| `subject` | Referenced | The patient being referred:[PetraMeier](Patient-PetraMeier.md) |
| `requester` | Referenced | The referring physician with their organizational context:[HansMusterRole](PractitionerRole-HansMusterRole.md) |
| `authoredOn` | Current date | Date when the referral was created |
| `reasonReference` | Referenced | Primary diagnosis:[Synovial sarcoma of the right knee](Condition-SarcomaKnee.md) |
| `supportingInfo` | Referenced | [Gadolinium contrast allergy](AllergyIntolerance-AllergyGado.md),[CT scan](ImagingStudy-ImagingCT.md),[PET scan](ImagingStudy-ImagingPET.md) |
| `note.text` | Manual entry | Free-text clinical note: "Review therapy recommendations." |


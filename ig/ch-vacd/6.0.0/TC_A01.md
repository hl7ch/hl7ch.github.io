# TC A 01 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC A 01**

## TC A 01

## Test Case A 01: Patient has three vaccination documents in two different communities (one of them recorded by the patient himself)

### Precondition

The patient has multiple vaccination documents in the ehealth ecosystem. There are three vaccination administration documents for him in different locations and they are all accessible. He created a [Document A-D1-P-C1](Bundle-A-D1-P-C1.md) himself and uploaded it to his electronic record. The other two documents were created and uploaded by two experts [HCP1](Practitioner-TC-HCP1-C1.md) and [HCP2](Practitioner-TC-HCP2-C2.md) in different repositories.

The practitioner HCP1 is connected to the same repository as the patient and has created and uploaded a document [Dokument A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md).

The practitioner HCP2 is connected to another repository and has created and uploaded a [Dokument A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md) for the patient there.

### Sequence

### Result

The aggregated view ([Result. Dokument 01](Bundle-RDA02.md)) of patient's vaccination documents should be displayed in the application.

### Documents

* [A_D1_P_C1](Bundle-A-D1-P-C1.md)
* [A_D2_HCP1_C1](Bundle-A-D2-HCP1-C1.md)
* [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md)
* [Result. Dokument A 01](Bundle-RDA01.md)
* [Result. Dokument A 01b](Bundle-RDA01b.md)

### Entries

* [Immunization TCA01-IMMUN1-patient](Immunization-TCA01-IMMUN1-patient.md)
* [Immunization TCA01-IMMUN2-HCP1-ORG1-ROLE](Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.md)
* [Immunization TCA01-IMMUN3-HCP2-ORG2-ROLE](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md)


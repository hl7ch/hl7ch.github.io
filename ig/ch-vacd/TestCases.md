# Test Cases - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **Test Cases**

## Test Cases

There are innumerable variations of contents related to vaccination. In the test cases listed below, the mechanism of dealing with multiple documents to obtain an overall picture of a patient's vaccination status has to be shown.

The test cases are tailored to use in the electronic patient record (EPR), but can also be used in all other areas outside of the EPR, since these are fundamental processes.

### Test Cases

#### A Immunizations

| | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [A01](TC_A01.md) | Patient has three vaccination documents in two different communities (one of them recorded by the patient himself) | [A_D1_P_C1](Bundle-A-D1-P-C1.md) | [A_D2_HCP1_C1](Bundle-A-D2-HCP1-C1.md) | [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md) | - | - | - | [Result. Document A 01](Bundle-RDA01.md) |
| [A02](TC_A02.md) | HCP from G2 applies and records second dose of vaccination (hepatitis A) | [A_D1_P_C1](Bundle-A-D1-P-C1.md) | [A_D2_HCP1_C1](Bundle-A-D2-HCP1-C1.md) | [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md) | [A_D4_HCP2_C2](Bundle-A-D4-HCP2-C2.md) | - | - | [Result. Document A 02](Bundle-RDA02.md) |
| [A03](TC_A03.md) | Patient enters second dose of vaccination (TBE) | [A_D1_P_C1](Bundle-A-D1-P-C1.md) | [A_D2_HCP1_C1](Bundle-A-D2-HCP1-C1.md) | [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md) | [A_D4_HCP2_C2](Bundle-A-D4-HCP2-C2.md) | [A_D5_P_C1](Bundle-A-D5-P-C1.md) | - | [Result. Document A 03](Bundle-RDA03.md) |
| [A04](TC_A04.md) | HCP validates the vaccination (TBE) (Doc6) which was entered by the patient (Doc5) | … | … | … | … | [D5_P_C1](Bundle-A-D5-P-C1.md) | [A_D6_HCP1_C1](Bundle-A-D6-HCP1-C1.md) | [Result. Document A 04](Bundle-RDA04.md) |

#### B Other Elements

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| [B01](TC_B01.md) | Allergy to typhoid vaccine | [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md) | [B_D2_HCP1_C1](Bundle-B-D2-HCP1-C1.md) | [Result. Document B 01](Bundle-RDB01.md) |
| [B02](TC_B02.md) | Undergone Illness (Varicella) | [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md) | [B_D3_HCP1_C1](Bundle-B-D3-HCP1-C1.md) | [Result. Document B 02](Bundle-RDB02.md) |
| [B03](TC_B03.md) | Expositionrisk (Working in healthcare) | [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md) | [B_D4_HCP1_C1](Bundle-B-D4-HCP1-C1.md) | [Result. Document B 03](Bundle-RDB03.md) |
| [B04](TC_B04.md) | Laboratory and Serology (Hepatitis B virus surface Ab) | [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md) | [B_D5_HCP1_C1](Bundle-B-D5-HCP1-C1.md) | [Result. Document B 04](Bundle-RDB04.md) |
| [B05](TC_B05.md) | Pregnancy | [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md) | [B_D6_HCP1_C1](Bundle-B-D6-HCP1-C1.md) | [Result. Document B 05](Bundle-RDB05.md) |

#### C Correction of Entries

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| [C01](TC_C01.md) | Correction of own entry | [A_D1_P_C1](Bundle-A-D1-P-C1.md) | [C_D1_P_C1](Bundle-C-D1-P-C1.md) | [Result. Document C 01](Bundle-RDC01.md) |
| [C02](TC_C02.md) | Correction of foreign entry | [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md) | [C_D2_HCP1_C1](Bundle-C-D2-HCP1-C1.md) | [Result. Document C 02](Bundle-RDC02.md) |
| [C03](TC_C03.md) | Cancel entry own community (refuted) | [B_D4_HCP1_C1](Bundle-B-D4-HCP1-C1.md) | [C_D3_HCP1_C1](Bundle-C-D3-HCP1-C1.md) | [Result. Document C 03](Bundle-RDC03.md) |
| [C04](TC_C04.md) | Cancel entry of other community | [C_D4_HCP2_C2](Bundle-C-D4-HCP2-C2.md) | [C_D5_HCP1_C1](Bundle-C-D5-HCP1-C1.md) | [Result. Document C 04](Bundle-RDC04.md) |
| [C05](TC_C05.md) | DOES NOT validate patient entry for Undergone illness | [C_D6_P_C1](Bundle-C-D6-P-C1.md) | [C_D7_HCP1_C1](Bundle-C-D7-HCP1-C1.md) | [Result. Document C 05](Bundle-RDC05.md) |

#### D Conflicts on merging Documents

| | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- |
| [D01](TC_D01.md) | On merging, a conflict is found in the immunization entries (same vaccination, same date) | [D_D1_HCP1_C1](Bundle-D-D1-HCP1-C1.md) | [D_D2_HCP2_C2](Bundle-D-D2-HCP2-C2.md) | … | [Result. Document D 01](Bundle-RDD01.md) |
| [D02](TC_D02.md) | Merging conflicts for immunization, medicalproblems and past illness | [D_D3_HCP1_C1](Bundle-D-D3-HCP1-C1.md) | [D_D4_HCP2_C2](Bundle-D-D4-HCP2-C2.md) | … | [Result. Document D 02](Bundle-RDD02.md) |
| [D03](TC_D03.md) | Merging conflict for medicalproblem in three documents | [D_D5_HCP1_C1](Bundle-D-D5-HCP1-C1.md) | [D_D6_HCP2_C2](Bundle-D-D6-HCP2-C2.md) | [D_D7_HCP3_C1](Bundle-D-D7-HCP3-C1.md) | [Result. Document D 03](Bundle-RDD03.md) |

#### E Language handling on merging Documents

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| [E01](TC_E01.md) | Mergin documents with different language settings | [E_D1_HCP1_C1](Bundle-E-D1-HCP1-C1.md) | [E_D2_HCP1_C1](Bundle-E-D2-HCP1-C1.md) | [Result. Document E 01](Bundle-RDE01.md) |

#### F Add Notes to existing Elements

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| [F01](TC_F01.md) | Add comment (note) to an existing Immunization | [F_D1_HCP1_C1](Bundle-F-D1-HCP1-C1.md) | [F_D2_HCP1_C1](Bundle-F-D2-HCP1-C1.md) | [Result. Document F 01](Bundle-RDF01.md) |
| [F02](TC_F02.md) | Add comment (note) to an existing AllergyIntolerance | [F_D3_HCP1_C1](Bundle-F-D3-HCP1-C1.md) | [F_D4_HCP1_C1](Bundle-F-D4-HCP1-C1.md) | [Result. Document F 02](Bundle-RDF02.md) |
| [F03](TC_F03.md) | Add comment (note) to an existing Condition(PastIllness) | [F_D5_HCP1_C1](Bundle-F-D5-HCP1-C1.md) | [F_D6_HCP1_C1](Bundle-F-D6-HCP1-C1.md) | [Result. Document F 03](Bundle-RDF03.md) |


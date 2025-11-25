# FHIR Document (Bundle) - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* **FHIR Document (Bundle)**

## FHIR Document (Bundle)

The CH ELM exchange format defines a FHIR document representing a coherent set of information specific to the transmission of laboratory data. This FHIR document is based on the [CH Lab report document](StructureDefinition-ch-elm-document.md) which is part of the [CH LAB-Report Project](index.md).

The exchange format expects a separate FHIR document per patient, organism and test performed.

The FHIR document consists of a bundle-resource of type "document" (the terms "FHIR document" and "Bundle" are synonymous in the context of the CH ELM project).

The bundle resource contains a consistent set of entries representing FHIR resources specific for the transmission of laboratory data:

| | |
| :--- | :--- |
| { | |
| "resourceType": "Bundle", | |
| "entry": [ | |
|     {        "resourceType": "[Composition](StructureDefinition-ch-elm-composition.md)"    }, | parameters like date, language, title, author, and referring to the different resources |
|     {        "resourceType": "[DiagnosticReport](StructureDefinition-ch-elm-diagnosticreport.md)"    }, | represents the laboratory report as a result of a lab order, with references to all other resources |
|     {        "resourceType": "[Patient](StructureDefinition-ch-elm-patient.md)"    }, | the person from whom the specimen was taken |
|     {        "resourceType": "[Observation](StructureDefinition-ch-elm-observation-results-laboratory.md)"    }, | defines the analyzed organism with the laboratory test result-values, interpretation, and test execution date |
|     {        "resourceType": "[Specimen](StructureDefinition-ch-elm-specimen.md)"    }, | the specimen material with collection date |
|     {        "resourceType": "[ServiceRequest](StructureDefinition-ch-elm-servicerequest-laboratory-order.md)"    }, | the lab order with the laboratory order ID, the requester, and performer of the laboratory test |
|     {        "resourceType": "[PractitionerRole](StructureDefinition-ch-elm-practitionerrole-orderer.md)"    }, | the orderer of the laboratory test containing a practitioner and/or organization |
|     {        "resourceType": "[Practitioner](StructureDefinition-ch-elm-practitioner-orderer.md)"    }, | the person ordering the laboratory test |
|     {        "resourceType": "[Organization](StructureDefinition-ch-elm-organization-orderer.md)"    }, | the organization ordering the laboratory test |
|     {        "resourceType": "[Organization](StructureDefinition-ch-elm-organization-lab.md)"    } | the performing laboratory |
| ] | |
| } | |

The FHIR document is generic and applicable for all types of organisms and reporting scenarios (use cases). For each resource within the FHIR document, a resource profile is defined to meet specific data needs depending on the context and use case.

### Resource profiles

Resource profiles are a way to customize and constrain FHIR resources to meet specific requirements depending on a particular context. These rules might restrict the allowable values for certain elements, specify additional mandatory elements, or define extensions to capture additional data beyond the standard FHIR resources. In the CH ELM Implementation Guide multiple profiles can exist based on the same FHIR resource.

Example: the FHIR resource «organization» is used to map the sender of the FHIR Document, the performing laboratory and the orderer of the laboratory test – each of which having its own profile.

The diagram [“Resource Overview”](profiles.md#overview) illustrates the connections between the individual resource-profiles of a FHIR document.

See the examples in chapter 2.2 to learn how to use the resource profiles for different use cases and data requirements.

### Example FHIR documents

#### Default scenario

##### Examples of basic FHIR documents (no additional codes for organism or specimen)

| | | | |
| :--- | :--- | :--- | :--- |
| Anthrax | Bacillus anthracis Ag [Presence] in Specimen | 31726-3 | [JSON](Bundle-38Doc-Anthrax.json.md),[XML](Bundle-38Doc-Anthrax.xml.md) |
| Botulisms | Clostridium botulinum toxin [Presence] in Specimen by Mouse bioassay | 33696-6 | [JSON](Bundle-39Doc-Botulims.json.md),[XML](Bundle-39Doc-Botulims.xml.md) |
| Brucellosis | Brucella sp IgA Ab [Presence] in Serum | 101802-7 | [JSON](Bundle-34Doc-Brucella.json.md),[XML](Bundle-34Doc-Brucella.xml.md) |
| Campylobacteriosis | Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection | 103168-1 | [JSON](Bundle-4Doc-Campylobacter.json.md),[XML](Bundle-4Doc-Campylobacter.xml.md) |
| Chikungunya fever | Chikungunya virus RNA [Presence] in Urine by NAA with probe detection | 86515-4 | [JSON](Bundle-24Doc-Chikungunya.json.md),[XML](Bundle-24Doc-Chikungunya.xml.md) |
| Cholera | Vibrio cholerae toxin ctx gene [Presence] in Specimen by NAA with probe detection | 53942-9 | [JSON](Bundle-20Doc-Vibrio-cholerae.json.md),[XML](Bundle-20Doc-Vibrio-cholerae.xml.md) |
| Covid-19 | SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory system specimen by NAA with probe detection | 94500-6 | [JSON](Bundle-7Doc-SARSCoV2.json.md),[XML](Bundle-7Doc-SARSCoV2.xml.md) |
| Crimean-Congo | Crimean-Congo hemorrhagic fever virus RNA [Presence] in Serum by NAA with probe detection | 88192-0 | [JSON](Bundle-40Doc-Crimean-Congo.json.md),[XML](Bundle-40Doc-Crimean-Congo.xml.md) |
| Creutzfeldt-Jakob Disease (CJD) | 14-3-3 Ag [Presence] in Cerebral spinal fluid | 31989-7 | [JSON](Bundle-35Doc-CJD.json.md),[XML](Bundle-35Doc-CJD.xml.md) |
| Dengue - reporting of high-level titer result | Dengue virus IgG Ab [Titer] in Serum | 6811-4 | [JSON](Bundle-16Doc-Dengue-Titer.json.md),[XML](Bundle-16Doc-Dengue-Titer.xml.md) |
| Ebola | Ebola virus RNA [Presence] in Blood by NAA with probe detection | 86518-8 | [JSON](Bundle-41Doc-Ebola.json.md),[XML](Bundle-41Doc-Ebola.xml.md) |
| Diphtheria | Corynebacterium diphtheriae DNA [Presence] in Specimen by NAA with probe detection | 67561-1 | [JSON](Bundle-18Doc-C-diphtheriae.json.md),[XML](Bundle-18Doc-C-diphtheriae.xml.md) |
| Enterohemorrhagic E. coli | Escherichia coli shiga-like toxin 1 [Presence] in Stool by Immunoassay | 51940-5 | [JSON](Bundle-59Doc-EHEC.json.md),[XML](Bundle-59Doc-EHEC.xml.md) |
| Gonorrhoea | Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture | 697-3 | [JSON](Bundle-1Doc-NeisseriaGonorrhoeae.json.md),[XML](Bundle-1Doc-NeisseriaGonorrhoeae.xml.md) |
| Haemophilus influenzae disease | Haemophilus influenzae B DNA [Presence] in Blood by NAA with probe detection | 53607-8 | [JSON](Bundle-22Doc-H-influenzae.json.md),[XML](Bundle-22Doc-H-influenzae.xml.md) |
| Hepatitis A | Hepatitis A virus IgM Ab [Presence] in Serum | 22314-9 | [JSON](Bundle-26Doc-HepatiteA.json.md),[XML](Bundle-26Doc-HepatiteA.xml.md) |
| Hepatitis B | Hepatitis B virus core IgM Ab [Presence] in Serum | 31204-1 | [JSON](Bundle-8Doc-HepatiteB.json.md),[XML](Bundle-8Doc-HepatiteB.xml.md) |
| Hepatitis C | Hepatitis C virus Ab [Presence] in Serum by Immunoblot | 5199-5 | [JSON](Bundle-9Doc-HepatiteC.json.md),[XML](Bundle-9Doc-HepatiteC.xml.md) |
| Hepatitis E | Hepatitis E virus RNA [Presence] in Stool by NAA with probe detection | 91071-1 | [JSON](Bundle-21Doc-HepatiteE.json.md),[XML](Bundle-21Doc-HepatiteE.xml.md) |
| Influenza | Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection | 76078-5 | [JSON](Bundle-6Doc-Influenza.json.md),[XML](Bundle-6Doc-Influenza.xml.md) |
| Lassa fever | Lassa virus RNA [Presence] in Specimen by NAA with probe detection | 97646-4 | [JSON](Bundle-42Doc-Lassa.json.md),[XML](Bundle-42Doc-Lassa.xml.md) |
| Listeriosis | Listeria monocytogenes DNA [Presence] in Cerebral spinal fluid by NAA with non-probe detection | 82184-3 | [JSON](Bundle-28Doc-Listeria-monocytogenes.json.md),[XML](Bundle-28Doc-Listeria-monocytogenes.xml.md) |
| Malaria | Plasmodium knowlesi DNA [Presence] in Blood by NAA with probe detection | 70568-1 | [JSON](Bundle-11Doc-Malaria.json.md),[XML](Bundle-11Doc-Malaria.xml.md) |
| Marburg fever | Marburg virus RNA [Presence] in Blood by NAA with probe detection | 86574-1 | [JSON](Bundle-43Doc-Marburg.json.md),[XML](Bundle-43Doc-Marburg.xml.md) |
| Measles - reporting of a seroconversion | Measles virus IgG and IgM [Interpretation] in Serum | 44012-3 | [JSON](Bundle-15Doc-Measles-Seroconversion.json.md),[XML](Bundle-15Doc-Measles-Seroconversion.xml.md) |
| MERS | Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Respiratory system specimen by NAA with probe detection | 94501-4 | [JSON](Bundle-44Doc-Mers-CoV.json.md),[XML](Bundle-44Doc-Mers-CoV.xml.md) |
| Plague | Yersinia pestis [Presence] in Specimen by Organism specific culture | 33685-9 | [JSON](Bundle-46Doc-Yersinia-pestis.json.md),[XML](Bundle-46Doc-Yersinia-pestis.json.md) |
| Pneumococcal disease | Streptococcus pneumoniae Ag [Presence] in Cerebral spinal fluid | 20489-1 | [JSON](Bundle-19Doc-S-pneumoniae.json.md),[XML](Bundle-19Doc-S-pneumoniae.json.md) |
| Poliomyelitis | Polio virus identified in Specimen by Organism specific culture | 73907-8 | [JSON](Bundle-54Doc-Poliomyelitis.json.md),[XML](Bundle-54Doc-Poliomyelitis.xml.md) |
| Rabies | Rabies virus neutralizing antibody [Presence] in Serum by Neutralization test | 70858-6 | [JSON](Bundle-55Doc-Tollwut.json.md),[XML](Bundle-55Doc-Tollwut.xml.md) |
| Rubella - reporting of a seroconversion | Rubella virus IgG Ab [Interpretation] in Serum | 20458-6 | [JSON](Bundle-29Doc-Rubella.json.md),[XML](Bundle-29Doc-Rubella.json.md) |
| Rubella - reporting of an avidity | Rubella virus IgG Ab avidity [Ratio] in Serum by Immunoassay | 52986-7 | [JSON](Bundle-32Doc-Rubella-avidity.json.md),[XML](Bundle-32Doc-Rubella-avidity.json.md) |
| SARS | SARS coronavirus RNA [Presence] in Specimen by NAA with probe detection | 41458-1 | [JSON](Bundle-45Doc-Sars-CoV.json.md),[XML](Bundle-45Doc-Sars-CoV.json.md) |
| Smallpox | Variola virus DNA [Presence] in Specimen by NAA with probe detection | 41856-6 | [JSON](Bundle-47Doc-Variola.json.md),[XML](Bundle-47Doc-Variola.json.md) |
| Tick - borne encephalitis | Tick - borne encephalitis virus RNA [Presence] in Specimen by NAA with probe detection | 97920-3 | [JSON](Bundle-25Doc-Tick-borne-encephalitis.json.md),[XML](Bundle-25Doc-Tick-borne-encephalitis.xml.md) |
| Trichinellosis | Trichinella spiralis [Presence] in Tissue by Light microscopy | 23499-7 | [JSON](Bundle-56Doc-Trichinella-spiralis.json.md),[XML](Bundle-56Doc-Trichinella-spiralis.xml.md) |
| Tuberculosis | Mycobacterium sp identified in Bronchial specimen by Organism specific culture | 9823-6 | [JSON](Bundle-65Doc-Tuberculosis.json.md),[XML](Bundle-65Doc-Tuberculosis.xml.md) |
| Yellow fever | Yellow fever virus IgM Ab [Presence] in Serum | 41216-3 | [JSON](Bundle-51Doc-Gelbfieber.json.md),[XML](Bundle-51Doc-Gelbfieber.xml.md) |
| Zika fever | Zika virus IgM Ab [Presence] in Serum by Immunofluorescence | 82731-1 | [JSON](Bundle-37Doc-Zika.json.md),[XML](Bundle-37Doc-Zika.xml.md) |

##### Example of a SNOMED CT code instead of a LOINC code in observation.code

| | | | |
| :--- | :--- | :--- | :--- |
| Carbapenemase-producing Enterobacteriaceae | Carbapenemase-producing Enterobacteriaceae (organism) | 734351004 | [JSON](Bundle-3Doc-CPE.json.md),[XML](Bundle-3Doc-CPE.xml.md) |
| Syphilis | Treponema pallidum (organism) | 72904005 | [JSON](Bundle-5Doc-TreponemaPallidum.json.md),[XML](Bundle-5Doc-TreponemaPallidum.xml.md) |
| HIV | Human immunodeficiency virus type I (organism) | 89293008 | [JSON](Bundle-49Doc-HIV.json.md),[XML](Bundle-49Doc-HIV.xml.md) |

##### Example of an organism specification

| | | | |
| :--- | :--- | :--- | :--- |
| Hanta fever | Hantavirus RNA [Presence] in Blood by NAA with probe detection | 18725-2 | [JSON](Bundle-52Doc-Hantavirus.json.md),[XML](Bundle-52Doc-Hantavirus.xml.md) |
| Influenza A new subtype | Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection | 59423-4 | [JSON](Bundle-53Doc-InfluenzaHxNy.json.md),[XML](Bundle-53Doc-InfluenzaHxNy.xml.md) |
| Legionellosis | Legionella sp Ag [Presence] in Urine | 32781-7 | [JSON](Bundle-10Doc-Legionella.json.md),[XML](Bundle-10Doc-Legionella.xml.md) |
| Paratyphoid fever | Salmonella sp [Presence] in Stool by Culture | 82301-3 | [JSON](Bundle-36Doc-Salmonella-paratyphi.json.md),[XML](Bundle-36Doc-Salmonella-paratyphi.xml.md) |
| Salmonellosis | Salmonella sp DNA [Presence] in Specimen by NAA with probe detection | 49612-5 | [JSON](Bundle-30Doc-Salmonella-enteritidis.json.md),[XML](Bundle-30Doc-Salmonella-enteritidis.xml.md) |
| Shigellosis | Shigella sp [Presence] in Specimen by Organism specific culture | 46454-5 | [JSON](Bundle-13Doc-Shigella.json.md),[XML](Bundle-13Doc-Shigella.xml.md) |
| Tularaemia - with optional organism specification | Francisella tularensis Ag [Presence] in Serum | 31828-7 | [JSON](Bundle-23Doc-F-tularensis.json.md),[XML](Bundle-23Doc-F-tularensis.xml.md) |
| West-Nile-Fever | Virus identified in Specimen by Culture | 6584-7 | [JSON](Bundle-57Doc-West-Nile.json.md),[XML](Bundle-57Doc-West-Nile.xml.md) |

##### Example of a specimen specification

| | | | |
| :--- | :--- | :--- | :--- |
| Chlamydiosis | Chlamydia trachomatis [Presence] in Specimen by Organism specific culture | 6349-5 | [JSON](Bundle-2Doc-ChlamydiaTrachomatis.json.md),[XML](Bundle-2Doc-ChlamydiaTrachomatis.xml.md) |
| Mpox | Mpox virus DNA [Presence] in Specimen by NAA with probe detection | 100383-9 | [JSON](Bundle-12Doc-Mpox.json.md),[XML](Bundle-12Doc-Mpox.xml.md) |

##### Example of a VCT Patient with specimen specification

| | | | |
| :--- | :--- | :--- | :--- |
| Chlamydiosis | Chlamydia trachomatis [Presence] in Specimen by Organism specific culture | 6349-5 | [JSON](Bundle-2Doc-ChlamydiaTrachomatis-Vct.json.md),[XML](Bundle-2Doc-ChlamydiaTrachomatis-Vct.xml.md) |

##### Example of quantity, ratio or text observation values (non-coded)

| | | | |
| :--- | :--- | :--- | :--- |
| HIV | HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection | 62469-2 | [JSON](Bundle-50Doc-HIV-viremia.json.md),[XML](Bundle-50Doc-HIV-viremia.xml.md) |
| Mpox | Mpox virus clade [Type] in Specimen by Sequencing | 101003-2 | [JSON](Bundle-48Doc-Mpox-Clade.json.md),[XML](Bundle-48Doc-Mpox-Clade.xml.md) |
| Q-fever | Coxiella burnetii phase 2 IgG Ab [Titer] in Serum | 9709-7 | [JSON](Bundle-58Doc-Coxiella.json.md),[XML](Bundle-58Doc-Coxiella.xml.md) |
| Salmonellosis | Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination | 56475-7 | [JSON](Bundle-33Doc-Salmonella-valueString.json.md),[XML](Bundle-33Doc-Salmonella-valueString.xml.md) |

#### Broker scenario

| | | | |
| :--- | :--- | :--- | :--- |
| Gonorrhoea | Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture | 697-3 | [JSON](Bundle-1bDoc-NeisseriaGonorrhoeae.json.md),[XML](Bundle-1bDoc-NeisseriaGonorrhoeae.xml.md) |

#### Example withh minimal practitioner orderer information (only name, plz, city)

| | | | |
| :--- | :--- | :--- | :--- |
| Gonorrhoea | Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture | 697-3 | [JSON](Bundle-1cDoc-NeisseriaGonorrhoeae.json.md),[XML](Bundle-1cDoc-NeisseriaGonorrhoeae.xml.md) |

#### Scenario for confirmation tests

| | | | |
| :--- | :--- | :--- | :--- |
| Meningococcal disease - initial observation by primary laboratory | Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain | 14357-8 | [JSON](Bundle-17Doc-Neisseria.json.md),[XML](Bundle-17Doc-Neisseria.xml.md) |
| Meningococcal disease - confirmation test by reference laboratory | Neisseria meningitidis [Presence] in Cerebral spinal fluid by Organism specific culture | 86581-6 | [JSON](Bundle-14Doc-Neisseriameningitidis-confirmationtest.json.md),[XML](Bundle-14Doc-Neisseriameningitidis-confirmationtest.xml.md) |
| Meningococcal disease - confirmation test by reference laboratory with additional original order information | Neisseria meningitidis [Presence] in Cerebral spinal fluid by Organism specific culture | 86581-6 | [JSON](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.json.md),[XML](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.xml.md) |

#### Microbial susceptibility tests set

| | | | |
| :--- | :--- | :--- | :--- |
| Tuberculosis | Mycobacterial susceptibility panel by Method for Slow-growing mycobacteria | 29579-0 | [JSON](Bundle-61Doc-Tb-Susceptibility.json.md),[XML](Bundle-61Doc-Tb-Susceptibility.xml.md) |

#### Genotyping

| | | | |
| :--- | :--- | :--- | :--- |
| Tuberculosis | Mycobacterium tuberculosis complex resistance panel by Molecular genetics method | 94053-6 | [JSON](Bundle-63Doc-Tb-Genotyping.json.md),[XML](Bundle-63Doc-Tb-Genotyping.xml.md) |

#### HIV recency

| | | | |
| :--- | :--- | :--- | :--- |
| HIV recency | HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot | 77685-6 | [JSON](Bundle-66Doc-HivRecency.json.md),[XML](Bundle-66Doc-HivRecency.xml.md) |

#### FOPH Emergening Pathogen

| | | | |
| :--- | :--- | :--- | :--- |
| Emergenging Pathogen | FOPH emerging pathogen placeholder | EP-100100-7 | [JSON](Bundle-67Doc-Emerging-Pathogen.json.md),[XML](Bundle-67Doc-Emerging-Pathogen.xml.md) |

